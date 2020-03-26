// common way to initialize jQuery
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='userdetails']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      username: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      contactno: {
      	required: true,
        number: true
     },
      message: {
      	  required: true,
          minlength: 5,
          maxlength: 30
      }
      
    },
    // Specify validation error messages
    messages: {
      username: "Please enter user name",
      email: "Please enter a valid email address",
      message: "Enter your message 3-20 characters",
      contactno : "Please enter a valid phone number",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});