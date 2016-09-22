          <div id="bar-top">
               <div id="bar-top_wrap">
                    <div id="lang">
                         <div id="google_translate_element">
                         </div>
                         <script type="text/javascript">
                              function googleTranslateElementInit() {
                                   new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                              }
                         </script>
                         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
                    <ul id="programs" ng-controller="barControllers">
                         <li class="programs-span" ng-repeat="items in users">
                              <a href="{{items.website}}">{{items.short}}</a>
                         </li>
                    </div>
               </div>
          </div>
