
  <!--  Events  -->
  <template id="eventsTemplate">
   
    <div id="eventsAnchor">
     
      <div class="mploading" v-show="isLoading">
        
         <div class="mploading__bouncer">
          
           <div class="double-bounce1"></div>
           
           <div class="double-bounce2"></div>
           
         </div>
         
      </div>
      
      <div v-show="!isLoading">

      <!--   Intro-->

      <div class="mpsnapbox mpsnapbox--events">
       
        <div class="mpsnapbox__inner">

          <div class="mpintro">

            <div class="mpintro__text">

              <h2>Events</h2>

              <br><br>

              <p>You are invited to join the Metacin contact list to receive the latest updates on new music releases, performances and special events. </p>

              <br><br>

            </div>

          </div>

        </div>

      </div>

      <div class="mpwppage u-center">

          <h2>Events are Coming Soon</h2>

          <p>Currently, no events are posted. Want to be notified of the next event?</p>
          
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="//metacin.us16.list-manage.com/subscribe/post?u=ad6fe820c451eb5f8873cf102&amp;id=647710ab15" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
              <label for="mce-EMAIL">Subscribe to our mailing list</label>
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ad6fe820c451eb5f8873cf102_647710ab15" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
          </form>
          </div>

          <!--End mc_embed_signup-->

      </div>

    </div>
    
   </div>
   
  </template>