<template>
  <v-app dark>
    <v-toolbar class="grey darken-4">
      <v-toolbar-title v-text="title"></v-toolbar-title>
      <v-spacer></v-spacer>

      <v-btn icon>
      <v-badge overlap color="red">
      <span slot="badge">6</span>
        <v-icon>
          event
        </v-icon>
      </v-badge>
      </v-btn icon>
      
    

      <v-btn icon href="https://www.accuweather.com/es/cl/san-pedro-de-atacama/57225/weather-forecast/57225" target="_blank">
        <v-icon>wb_sunny</v-icon>
      </v-btn>


      <v-btn icon href="https://www.timeanddate.com/moon/phases/@3899192" target="_blank">
        <v-icon>brightness_3</v-icon>
      </v-btn>
      
      
      <v-btn icon>
        <v-icon>contacts</v-icon>
      </v-btn>
      
      <v-btn
        class="orange darken-4"
        dark
        large
        round
        href="/pre-made-themes"
      >
        Login
      </v-btn>
    </v-toolbar>


    <v-content :style="myStyle">

      <section>
        <v-parallax src="images/sanpeter2.jpg" height="600">
          <v-layout
            column
            
            justify-center
            class="white--text"
          >
            <!-- <img src="images/vuetify.png" alt="Vuetify.js" height="200"> -->
            <h1 class="display-3 font-weight-thin text-md-center">AtacamaScope</h1>

            <h1 class="white--text mb-2 display-2 font-weight-thin text-md-center">Opera un telescopio remoto</h1>
            <h3 class="white--text mb-2 display-1 font-weight-thin text-md-center">En los cielos mas limpios del munco</h3>
            <!-- <div class="subheading mb-3 text-xs-center">Powered by Vuetify</div> -->
            <div class="text-lg-center">
              <v-btn
                class="orange darken-4"
                dark
                large
                href="/pre-made-themes"
              >
                Comienza Ahora
              </v-btn>
            </div>
          </v-layout>
        </v-parallax>
      </section>

      <section>
        <v-layout
          column
          wrap
          class="my-5"
          align-center
        >
          <v-flex xs12 sm4 class="my-3">
            <div class="text-xs-center">
              <h2 class="headline">Unos Simples Pasos</h2>
              <span class="subheading">
                Y ya estas en San Pedro de Atacama, Chile  
              </span>
            </div>
          </v-flex>
          <v-flex xs12>
            <v-container grid-list-xl>
              <v-layout row wrap align-center>
                <v-flex xs12 md3>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">settings</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-xs-center">Elige y reserva tu telescopio</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md3>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">blur_on</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-xs-center">Elige un objeto astronómico</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md3>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">add_a_photo</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-xs-center">Elige los parametros de la Foto</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 md3>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">cloud_download</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline text-xs-center">Dispara y obten tu foto en alta calidad</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                    </v-card-text>
                  </v-card>
                </v-flex>
              </v-layout>
            </v-container>
          </v-flex>
        </v-layout>
      </section>

      <section>
        <v-parallax src="images/vialactea1.jpg" height="600">
          <v-layout column align-center justify-center>
            <div class="headline white--text mb-3 text-xs-center">¿ Por que usar AtacamaScope ?</div>
            <em>Solo algunas Ventajas</em>

          <v-flex xs12>
            <v-container grid-list-xl>
              <v-layout row wrap align-center>
                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">flare</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline white--text mb-3 text-xs-center font-weight-thin">Tenemos los cielos mas limpios del mundo</div>
                    </v-card-title>
                  </v-card>
                </v-flex>           

                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">money_off</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline white--text mb-3 text-xs-center font-weight-thin">No necesitas comprar equipos de alto costo</div>
                    </v-card-title>
                  </v-card>
                </v-flex> 

                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">settings</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline white--text mb-3 text-xs-center font-weight-thin">Los eqipos de observación, ya están alineados y seteados</div>
                    </v-card-title>
                  </v-card>
                </v-flex> 

                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">public</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline white--text mb-3 text-xs-center font-weight-thin">Puedes acceder desde cualquier parte del mundo</div>
                    </v-card-title>
                  </v-card>
                </v-flex> 

                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">airplanemode_inactive</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline white--text mb-3 text-xs-center font-weight-thin">no necesitas pagar costos de viajes, alojamientos etc.</div>
                    </v-card-title>
                  </v-card>
                </v-flex> 


                <v-flex xs12 md4>
                  <v-card class="elevation-0 transparent">
                    <v-card-text class="text-xs-center">
                      <v-icon x-large class="white--text text--lighten-2">touch_app</v-icon>
                    </v-card-text>
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline white--text mb-3 text-xs-center font-weight-thin">Busca tu lugar del cielo, dispara y baja tu foto</div>
                    </v-card-title>
                  </v-card>
                </v-flex> 
              </v-layout>
            </v-container>
          </v-flex>      

          </v-layout>
        </v-parallax>
      </section>

      <section>
              
        <v-layout column align-center class="my-5">
          <div class="headline white--text mb-3 text-xs-center">Fotos de nuestros usuarios</div>
          <em>CopyRight: Victor Ramirez M</em>
        </v-layout>  
        <v-container fluid grid-list-sm>
          <v-layout>
            <v-flex xs6 sm4>
              <v-img
                src="images/vialactea1.jpg"
                gradient="to top right, rgba(100,115,201,.33), rgba(25,32,72,.7)"
              ></v-img>
            </v-flex>

            <v-flex xs6 sm4>
              <v-img src="images/vialactea1.jpg">
                <div class="fill-height bottom-gradient"></div>
              </v-img>
            </v-flex>

            <v-flex xs6 sm4>
              <v-img src="images/vialactea1.jpg"
                gradient="to top right, rgba(0,0,0,.9), rgba(25,32,72,.3)"
              ></v-img>
            </v-flex>
          </v-layout>
        </v-container>
      </section>  

      <section>
        <v-container grid-list-xl>
          <v-layout row wrap justify-center class="my-5">
            <v-flex xs12 sm4>
              <v-card class="elevation-0 transparent">
                <v-card-title primary-title class="layout justify-center">
                  <div class="headline">AtacamaScope</div>
                </v-card-title>
                <v-card-text>
                  Dirección San Pedro de Atacama Chile
                  Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                  Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                </v-card-text>
              </v-card>
            </v-flex>
            <v-flex xs12 sm4 offset-sm1>
              <v-card class="elevation-0 transparent">
                <v-card-title primary-title class="layout justify-center">
                  <div class="headline">Contactanos</div>
                </v-card-title>
                <v-card-text>
                  Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                </v-card-text>
                <v-list class="transparent">
                  <v-list-tile>
                    <v-list-tile-action>
                      <v-icon class="blue--text text--lighten-2">phone</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                      <v-list-tile-title>777-867-5309</v-list-tile-title>
                    </v-list-tile-content>
                  </v-list-tile>
                  <v-list-tile>
                    <v-list-tile-action>
                      <v-icon class="blue--text text--lighten-2">place</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                      <v-list-tile-title>Chicago, US</v-list-tile-title>
                    </v-list-tile-content>
                  </v-list-tile>
                  <v-list-tile>
                    <v-list-tile-action>
                      <v-icon class="blue--text text--lighten-2">email</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                      <v-list-tile-title>emailcontacto@atacamascope.com</v-list-tile-title>
                    </v-list-tile-content>
                  </v-list-tile>
                </v-list>
              </v-card>
            </v-flex>

          </v-layout>

        </v-container>
      </section>



    </v-content>
  </v-app>

</template>

     
      

<script>
  export default {
    data(){
      return{
        myStyle:{
            backgroundColor:"#05051F"
          }  
        }
      }
   }
</script>