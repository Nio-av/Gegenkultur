<script>
    
    
    
    var FB; // to avoid error "undeclared variable", until FB got initialized
    var myQueue = new Array();
    function queueAdd(f){
      if (FB == undefined)
        myQueue.push(f);
      else
        f();
    }

    function processQueue(){
      var f;
      while(f = myQueue.shift())
        f();
    }
    
    
    
    
    //############ Basic SDK-Init ##############//
    
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1519037951732644',
      xfbml      : true,
      version    : 'v2.5',
      cookie     : 'true'
    });
    
      
      processQueue(); // to avoid error "undeclared variable"
      
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/de_DE/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>