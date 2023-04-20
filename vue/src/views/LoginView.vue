<template>
    <div>
        <!-- <LoginMenu /> -->
        <h1>Login</h1>

        <div>
            <label for="">Email</label> <br>
            <input
                v-model="email"
                placeholder="Email"
                type="email"
            />
        </div>

        <div>
            <label for="">Password</label> <br>
            <input
                v-model="password"
                placeholder="Password" 
                type="text"
                />
        </div>

        <div>
            <button
            @click.prevent="login()"
            >Entrar</button>
        </div>
    </div>
</template>
<script>
// import LoginMenu from '@/components/Auth/LoginMenu';
import axios from '@/plugins/axios';
import Cookie from 'js-cookie';

export default {
    name: 'Login',

    components: {
        // LoginMenu,
    },

    data() {
        return {
            email:'',
            password:''
        };
    },

    methods: {
        login() {
            const payload = {
                email: this.email,
                password: this.password
            };

            //conexao ajax
            axios.post('/login', payload).then((response) => {
                const token = `${response.data.token_type} ${response.data.access_token}`; 

                Cookie.set('_todolist_token', token, {
                    expires:30
                });
            });

        },
    },
}
</script>
<style>
    
</style>