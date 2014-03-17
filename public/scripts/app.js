var questack = angular.module('questack',['ui.router']);
questack.config(function($stateProvider, $urlRouterProvider){
  $urlRouterProvider.otherwise('/dashboard');
  $stateProvider.state('/dashboad',{
    url:'/dashboard',
    templateUrl:'tmpl/module-list.html',
    controller:"DashboardController"
  }).state('dashboard.modules',{
    url:'/modules',
    templateUrl:'tmpl/module-list.html'
  })
});

questack.controller('DashboardController',function($rootScope,$scope){
  $rootScope.modules=[
    {name:'Time Table Manager',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Preptitude',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'},
    {name:'Admissions',category:'education',description:'Lets you assign slots for teacher based on time and subject like a regular time table'}
  ]
  
  //calculate module positions..
    
  $rootScope.showMenu=function(){
    $('.module').each(function(pos,obj){
       var jqObj = $(obj);
       jqObj.css('left',jqObj.position().left);
       jqObj.css('top',jqObj.position().top);
    });
    
    var container = angular.element('.modules-container');
    if(container.hasClass('retract'))
    {
      container.removeClass('retract');
      
    }else{
      container.addClass('retract');
    }
  }
})


questack.directive('queLoader',function(){
  return{
    restrict:"E",
    templateUrl:"tmpl/que-loader-templ.html"
  }
});