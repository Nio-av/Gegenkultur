<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/basic.css" rel="stylesheet" type="text/css"></link>
    <link href="css/index.css" rel="stylesheet" type="text/css"></link>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

    <title>Datenschutzumfrage</title>

</head>





<body class="background">

    <?php include_once "res/basicsdk.php" ?>

    <script>
        function CheckGoOnVisibility() {
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    document.getElementById("GoOn-Link").style.display = 'table-row';
                } else {
                    document.getElementById("GoOn-Link").style.display = 'none';
                }
            })
        };
        
        
        queueAdd(CheckGoOnVisibility);
    </script>



    <article>
        <h1>Danke für deine Mithilfe!</h1>
        <p>Bitte logge dich ein, um an der Umfrage teilzunehmen. :)</p>
    </article>



    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true" scope="public_profile,user_friends,email,user_about_me,user_actions.books,user_actions.fitness,user_actions.music,user_actions.news,user_actions.video,user_birthday,user_education_history,user_events,user_games_activity,user_hometown,user_likes,user_location,user_managed_groups,user_photos,user_posts,user_relationships,user_relationship_details,user_religion_politics,user_tagged_places,user_videos,user_website,user_work_history,read_custom_friendlists,read_insights,read_audience_network_insights,read_page_mailboxes,manage_pages,publish_pages,rsvp_event,pages_show_list,pages_manage_cta,pages_manage_leads,ads_read,ads_management" onlogin="queueAdd(goon)"></div>

    <script>
        




        function goon() {
            queueAdd(CheckGoOnVisibility);
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    queueAdd(CheckGoOnVisibility);
                    window.location.href = "umfrage.php";
                    
                }
            });
        }
        //queueAdd(goon);
    </script>



    <div id="GoOn-Link">
        <a href="umfrage.php">Weiter zur Umfrage.</a>
    </div>

    <!--
    <div id="Like-Button">
        <article>
          <div
            class="fb-like"
            data-share="true"
            data-width="450"
            data-show-faces="true">
          </div>
        </article>
    </div>
    -->


    <?php include_once "res/footer.php"; ?>

</body>

</html>