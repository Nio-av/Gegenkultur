<!DOCTYPE HTML>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/basic.css" rel="stylesheet" type="text/css"></link>
    <link href="css/auswertung.css" rel="stylesheet" type="text/css"></link>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>


    <title>Datenschutzumfrage</title>

</head>





<body class="background">
    <?php include_once "res/basicsdk.php" ?>
    
    <article>
    <h1 id="Welcome">Hallo</h1>
    
    
    <script>
    var name;
    var birthday;
    var email;
    var relationship;
    var hometown;
    var education;
    
    
    window.fbAsyncInit = function() {
    FB.init({
          appId      : '1519037951732644',
          xfbml      : true,
          version    : 'v2.5'
        });
      
        
            FB.getLoginStatus(function(response) {
              if (response.status === 'connected') {
                console.log('Logged in.');
                GetData();
              }
              else {
                  console.log('Not Logged in.');
                  window.location.href = "/.";
              }
            });
        
    };
        
        
        
        
        
        function GetData() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me?fields=id,name,about,age_range,bio,birthday,context,cover,currency,devices,education,email,favorite_athletes,favorite_teams,first_name,gender,hometown,inspirational_people,install_type,installed,interested_in,is_verified,languages,last_name,locale,location,meeting_for,middle_name,name_format,political,quotes,relationship_status,religion,security_settings,significant_other,sports,test_group,third_party_id,timezone,updated_time,verified,video_upload_limits,viewer_can_send_gift,website,work', function (response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('Welcome').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
                document.getElementById('Abstract').innerHTML = 'Du bist geboren am ' + response.birthday + 
                    '<br>Deine eMailadresse ist ' + response.email +
                    '<br>Dein Beziehungsstatus ist ' + response.relationship_status;
                document.getElementById('Output').innerHTML = 'Und wir wissen noc viel mehr...!<br>' +                    JSON.stringify(response);
                
                
                name = response.name;
                birthday = response.birthday;
            });
        }
        
        queueAdd(GetData);
    </script>
    
    <p id="Einleitungstext">Bist du dir sicher, dass du dich dann richtig verhälst?</p>
    <article>
        <p id="Abstract">
            Du bisst geboren am  
            <script>
                queueAdd(GetData);
                document.write(birthday);
            </script>
        </p>
    </article>
    <div id="Output"></div>
        
        
    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true" scope="public_profile" onlogin="queueAdd(goon)"></div>
        
    </article>


    <?php include_once "res/footer.php"; ?>

</body>

</html>