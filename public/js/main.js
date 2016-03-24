/*
|--------------------------------------------------------------------------
| main
|--------------------------------------------------------------------------
|In this part we are connecting all javascript dependencies to the application using require.js;
|
|
|
|
*/

requirejs.config({
    baseUrl:"public",
    paths:{
        'jquery' : '../bower/jquery/dist/jquery.min',
        'mixitup':"../bower/mixitup/build/jquery.mixitup.min",
        'bootstrap':"../bower/bootstrap/dist/js/bootstrap.min"
    }
});
define(['jquery'],function(){


    require(['mixitup','bootstrap']);
    require(['js/routs']);
});


