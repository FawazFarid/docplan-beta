//dropdown
$('.ui.dropdown').dropdown();
////local location variable and feedback
var cities = [{
        title:'Boston'
},
{
        title:'Cleverland'
},
{
        title:'Brooklyn'
},
{
        title:'Manhattan'
}
];
$('.ui.search.location').search({
    source:city,
    searchFields:['title'],
    searchFullText:false
});

$('.ui.form').form({
   fields: {
       email: {
           identifier: 'email',
           rules: [
               {
                   type: 'empty',
                   prompt: 'Please enter email'
               },
               {
                   type: 'email',
                   prompt: 'Please enter valid email'
               }
           ]
       },
       password:{
           identifier: 'password',
           rules: [
               {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
           ]
       }
   } 
});

// fix menu when passed
$('.masthead').visibility({
    once: false,
    onBottomPassed: function () {
        $('.fixed.menu').transition('fade in');
    },
    onBottomPassedReverse: function () {
        $('.fixed.menu').transition('fade out');
    }
});

// create sidebar and attach to menu open
$('.ui.sidebar').sidebar('attach events', '.toc.item');


$('.ui.button')
  .on('click', function() {
    // programmatically activating tab
    $.tab('change tab', 'tab-name');
  })
;

$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;