<class id="side_bar">
    <div class="right_side">
        <div id="secondary">
            <h4>Alpha Sign Up</h4>
            <p>
                We are only accepting a few more users into our private alpha. Sign up if you would like to be considered.
            </p>
            <a href="http://www.sourceninja.com/sign-up.html" class="sign_up">Sign Up</a>
        </div>
    </div>
    <div class="right_side">
        <h3>Twitter Feed</h3>
        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script>
            new TWTR.Widget({
                version : 2,
                type : 'profile',
                rpp : 4,
                interval : 30000,
                width : 225,
                height : 300,
                theme : {
                    shell : {
                        background : '#ffffff',
                        color : '#595959'
                    },
                    tweets : {
                        background : '#ffffff',
                        color : '#636263',
                        links : '#026d85'
                    }
                },
                features : {
                    scrollbar : false,
                    loop : false,
                    live : false,
                    behavior : 'all'
                }
            }).render().setUser('SourceNinja').start();

        </script>
    </div>
    <div class="right_side">
        <div class="fb-like-box" data-href="http://www.facebook.com/SourceNinja" data-width="240" data-height="410" data-show-faces="true" data-border-color="#fff" data-stream="false" data-header="false"></div>
    </div>
</class>