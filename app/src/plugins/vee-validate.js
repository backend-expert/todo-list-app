// import { extend } from 'vee-validate';
// import { required, email } from 'vee-validate/dist/rules';

// import { extend } from 'vee-validate';
// import * as rules from 'vee-validate/rules';

// Object.keys(rules).forEach(rule => {
//   extend(rule, rules[rule]);
// });

// // with typescript
// for (let [rule, validation] of Object.entries(rules)) {
//   extend(rule, {
//     ...validation
//   });
// }

// import { defineRule } from 'vee-validate';
// import * as rules from '@vee-validate/rules';

// Object.keys(rules).forEach(rule => {
//   defineRule(rule, rules[rule]);
// });
// import { defineRule } from 'vee-validate';
// import { required, email, min } from './vee-validate/dist/vee-validate';
// import {
//   ValidationProvider,
//   ValidationObserver
// } from 'vee-validate/dist/vee-validate.full';

// defineRule('required', required);
// defineRule('email', email);
// defineRule('min', min);
import {
  Form as VeeForm,
  Field as VeeField,
  defineRule,
  ErrorMessage,
} from "vee-validate";

import { required } from "@vee-validate/rules";

export default {
  install(app) {
    app.component("VeeForm", VeeForm);
    app.component("VeeField", VeeField);
    app.component("ErrorMessage", ErrorMessage);

    defineRule("required", required);
  },
};
