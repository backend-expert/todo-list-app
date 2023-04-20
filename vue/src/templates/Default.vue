<template>
    <div>
        <TheHeader />

        <div>
            <RouterView />

        </div>
        
    </div>
</template>
<script>
import TheHeader from '@/components/Partials/TheHeader';

export default {
    name: 'Default',

    components: {
        TheHeader,
    },

    data() {
        return {

        };
    },
    
};
</script>
<style>
    
</style>