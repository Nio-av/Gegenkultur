 <!-- LogIn-Button -->
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
    

    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true" scope="public_profile,user_friends,email,user_about_me,user_actions.books,user_actions.fitness,user_actions.music,user_actions.news,user_actions.video,user_birthday,user_education_history,user_events,user_games_activity,user_hometown,user_likes,user_location,user_managed_groups,user_photos,user_posts,user_relationships,user_relationship_details,user_religion_politics,user_tagged_places,user_videos,user_website,user_work_history,read_custom_friendlists" onlogin="queueAdd(goon)"></div>

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