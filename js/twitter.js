 var cb = new Codebird;
             var cc;
              cb.setConsumerKey("2kx5muFW2jqoHp7FqBQ2jIyzS", "p5hPbliNeUORqjjYsAZtBxIOPqTTfzNywPuz5KtMuHchz3eMGG");
              cb.setToken("140706378-5Zq0bOP39na29SsQYd8OO1IdzjkZUHctdXlaeZpK", "w8wxrFJmyH6gktvRU7PahzqiDUCb3rOIFHI4Ov0JYrgI5");
            function TwitterLogin()
            {
                // gets a request token
                cb.__call(
                    "oauth_requestToken",
                    {oauth_callback: "http://kantamerica.com/desarrollo/"},// change the call back url for for extarting the data
                    // http://serveraddress/[twitter_project]/callback url //
                    function (reply) {
                        
                        cb.setToken(reply.oauth_token, reply.oauth_token_secret);
                        cb.__call(
                            "oauth_authorize",
                            {oauth_verifier: reply.oauth_verifier},
                            function (auth_url) {
                            // cc = window.open(auth_url,"Twitter Auth","height=500,width=500,menubar=no,location=yes,resizable=yes,scrollbars=yes,status=yes");
                                  //alert(reply.oauth_verifier); 
                                //alert(reply.oauth_verifier);
								//console.log(auth_url.screen_name);
								window.location.href= auth_url
                            }
                        );
                        
                    }
                );
                
            }
            /// get the url parameter value by this method
            function getQueryParams(qs) {
                qs = qs.split("+").join(" ");

                var params = {}, tokens,
                    re = /[?&]?([^=]+)=([^&]*)/g;

                while (tokens = re.exec(qs)) {
                    params[decodeURIComponent(tokens[1])]
                        = decodeURIComponent(tokens[2]);
                }

                return params;
            }
            
            //close the popup window and get the auth_varifier value //
            function closeTwitterPopup(){
                var current_url = window.location.toString();
                var query  = getQueryParams(current_url);
                window.onbeforeunload = function() {
                     window.opener.getTwitterUserByAutneticate(query.oauth_verifier);
                    };
                window.close();
            }
            
//        @see:    https://github.com/mynetx/codebird-js
            //get the user by new autho_varifire with call back url
         function getTwitterUserByAutneticate(authoTocken)
         {
             cb.__call(
                "oauth_accessToken",
                {oauth_verifier:authoTocken},
                function (reply) {
                    // store the authenticated token, which may be different from the request token (!)
                    cb.setToken(reply.oauth_token, reply.oauth_token_secret);

                                   cb.__call(
                                         "account_verifyCredentials",
                                         {},
                                         function (user_replay) {
                                             console.log(user_replay);
                                             var html = 'user_screen Name :' + user_replay.screen_name + ',  user_replay.name: '+ user_replay.name + ', user_id:'+ user_replay.id;
                                             document.getElementById('tuserinfo').innerHTML =html;
                                         }
                                     );
                            }
                        );
         }
            
            