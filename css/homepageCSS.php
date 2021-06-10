<style>

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    
}

/* Used an image for the background */
body{
    
    background-image: url(images/background4.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

    color:antiquewhite;
}

/* The navbar for veiwport 1200px and more */
nav{
    position:sticky;
    top:0;
    display: flex;
    justify-content: space-around;
    flex-direction: row;
    padding:2vh;
}



/* The anchor tags of nav bar for laptops and large devices */
nav a{
    background-color: rgba(31, 40, 51, 0.4);
    color:#66fcf1;
    text-decoration: none;
    text-shadow: 0px 0px 1px #fff, 
    0.5px 1px 1px #45a29e;
    font-size: 2.5vh;
    border:2px solid #45a29e;
    padding: 2vh;
    margin-bottom: 3vh;
    box-shadow: 0 3px 5px 0 rgba( 102, 252, 250, 0.5 );
    backdrop-filter: blur( 20px );
    -webkit-backdrop-filter: blur( 4px );
    border-radius: 10px;
    border: 2px solid rgba( 102, 252, 250, 0.25 );
}

/* The hamburger symbol div */
.navv{
    display: none;
}

/* The hamburger */
.openbtn{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
}

/* The user name display div */
.greeting{
        width:50vw;
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        font-size:5vw;
        flex-direction:wrap;
        gap:1vw;

    }

/* The user name of the first block */
.greeting h3{
    align-self:center;
    animation: colorchange 20s infinite alternate;
    -webkit-animation: colorchange 20s infinite alternate;
}

@-webkit-keyframes colorchange {
    0%{
        color:#ffffff;
    }
    10%{
        color:#ccffe6;
    }
    50%{
        color:#66fcf1;
    }

    90%{
        color:#01c5c4;
    }

    100%{
        color:#000000;
    }
}
#spin{
    display:none;
}

/* The css for devices greater than 1201px */
@media only screen and (min-width: 1201px) {

    /* This is not visible in this viewport */
    .openbtn{
        display:none;
    }


    /* The first block in homepage where user name and an image is displayed */
    .intro{
        background-color: rgba(231, 240, 251, 0.07);
        border: #45a29e;
        color:#66fcf1;
        width:100vw;
        height: 90vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 3vw;
        padding: 2vw;
        padding-bottom: 7vh;
        text-transform: uppercase;
        margin-bottom: 10vh;

    }

    /* The image of the intro div 2 girls image */
    .image{
        width: 50vw;
        }
    
}

/* The css for viewport in the range below */
@media only screen and (max-width: 1200px) and (min-width: 701px)  {
    
    /* The nav bar of higher viewports is hidden here */
    nav{
        display: none;
    }

    /* tHE nav bar of mobiles and tables is displayed here */
    .navv{
        display: block;
    }

    /* The background overlay for the navbar */
    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
      }
      
    /* The links of the nav bar adjustment */
      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      
      /* The anchor tags styling */
      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      /* The anchor tag on hover and focus chaging color for visual pleasing */
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }
      
      /* x mark styling */
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }
    

      /* The user name and the image of 2 girls div */
    .intro{
        background-color: rgba(31, 40, 51, 0.6);
        border: #45a29e;
        color:#66fcf1;
        width:100vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 3vw;
        padding: 2vw;
        padding-bottom: 7vh;
        text-transform: uppercase;
        margin-bottom: 10vh;

    }

    .greeting{
        width:100vw;
        height:20vh;
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        font-size:4.5vw;
        flex-direction:wrap;
        gap:1vw;

    }

    /* The user name styling */
    .greeting h3{
        align-self:center;
    }


    /* The image of two girls */
    .image{
    width: 50vw;
    }

}

/* Devices width lessthan or equALto 700px */
@media only screen and (max-width: 700px) {


    /* The laptop or large devices horizontal nav bar */
    nav{
        display: none;
    }

    /* The vertical nav bar for less viewport */
    .navv{
        display: block;
    }

    /* The hamburger div */
    .openbtn{
        position:sticky;
    }

    /* The background of the nav bar */
    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
      }
      
      /* The div of nav bar contents */
      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      
      /* The anchor tag of nav bar */
      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      /* nav bar on hover and focus */
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }
      
      /* The x mark */
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }
      
      
    /* The first block the user name and the image */
    .intro{
        background-color: rgba(31, 40, 51, 0.6);
        border: #45a29e;
        color:#66fcf1;
        width:100vw;
        height: 50vh;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-direction: column;
        font-size: 4vw;
        padding: 2vw;
        padding-bottom: 5vh;
        text-transform: uppercase;
        margin-bottom: 10vh;

    }

    /* The user name div */
    .greeting{
        width:100vw;
        height:20vh;
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        font-size:5vw;
        flex-direction:wrap;
        gap:1vw;

    }

    /* The user name styling */
    .greeting h3{
        align-self:center;
    }

    /* The image of 2 girls*/
    .image{
        width: 70vw;
        /* height:100vh; */
    }
    
}


/* For laptops and desktops of minimum width 1201 */
@media only screen and (min-width: 1201px) {

    /* UPLOAD VIDEOS text */
    .heading{
        text-align: center;
        margin-bottom: 2vh;
    }

    /* The upload container */
    .uploadd{
        width: 100vw;
        height: 50vh;
        background-color: rgba(31, 40, 51, 0.6);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row-reverse;
        padding: 4vw;
    }

    /* The minion image */
    .image2{
        width: 40vw;
        height: 40vh;
    }

    /* The choose file watermark and fontsize input fields */
    .file1{
        width: 50vw;
        background-color:rgba(0, 0, 25, 0.5);
        padding: 2vh;
        font-size: 2vh;
        font-family: cursive;
    }
    
    /* The input for watermark and fontsize */
    input[type=text]{
        color:white;
    }

    input[type=number]{
        color:white;
    }

    

    /* The upload button */
    .btn{

        width:10vw;
        height: 5vh;
        border-radius: 2vh;
        background-color:rgba(31,40,51,0.6);
        box-shadow: 0 3px 5px 0 rgba( 102, 252, 250, 0.5 );
        backdrop-filter: blur( 20px );
        -webkit-backdrop-filter: blur( 4px );
        border-radius: 10px;
        border: 2px solid rgba( 102, 252, 250, 0.25 );
        color:white;
        font-size: 1vw;
        text-shadow: 0px 0px 1px #000, 
                0px 0px 2px black;
    }

}  


/* The css for the devices like tablet and mini sized laptops */
@media only screen and (max-width: 1200px) and (min-width: 701px)  {

    /* The UPLOADS AND VIDEOS heading tag */
    .heading{
        text-align: center;
        margin-bottom: 2vh;
    }
    /* The upload form holding div */
    .uploadd{
        width: 100vw;
        height: 50vh;
        background-color: rgba(31, 40, 51, 0.6);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row-reverse;
        padding: 4vw;
    }

    /* The minion image */
    .image2{
        width: 40vw;
        height: 40vh;
    }

    /* The choose file watermark field and the font size input fields */
    .file1{
        width: 50vw;
        background-color:rgba(0, 0, 25, 0.5);
        padding: 2vh;
        font-size: 2vh;
        font-family: cursive;
    }

    /* THe input tag for the above mentioned */
    input[type=text]{
        color:white;
    }
    
    input[type=number]{
        color:white;
    }

    /* Upload button div */
    .btn{

        width:20vw;
        height: 5vh;
        border-radius: 2vh;
        background: rgb(63,250,251);
        background-color:rgba(31,40,51,0.6);
        box-shadow: 0 3px 5px 0 rgba( 102, 252, 250, 0.5 );
        backdrop-filter: blur( 20px );
        -webkit-backdrop-filter: blur( 4px );
        border-radius: 10px;
        border: 2px solid rgba( 102, 252, 250, 0.25 );
        color:white;
        font-size: 2.5vw;
        text-shadow: 0px 0px 1px #000, 
                0px 0px 2px black;
    }

}


/* Smaller devices viewport */
@media only screen and (max-width: 700px) {
    
    /* THe UPLOADS & VIDEOS text */
    .heading{
        text-align: center;
        margin-bottom: 2vh;
    }

    /* The upload div */
    .uploadd{
        width: 100vw;
        height: 60vh;
        background-color: rgba(31, 40, 51, 0.6);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
        padding: 4vw;
    }

    /* The minions div */
    .image2{
        width: 40vw;
        height: 20vh;
    }

    /* Input fields for choosefile watermark and fontsize */
    .file1{
        width: 50vw;
        background-color:rgba(0, 0, 25, 0.5);
        padding: 2vh;
        font-size: 1.3vh;
        font-family: cursive;
    }

    /* THe input tag for the above mentioned */
    input[type=text]{
        color:white;
    }

    input[type=number]{
        color:white;
    }


    /* The upload button */
    .btn{

        width:100vw;
        height: 3vh;
        border-radius: 2vh;
        background: rgb(63,250,251);
        background-color:rgba(31,40,51,0.6);
        box-shadow: 0 3px 5px 0 rgba( 102, 252, 250, 0.5 );
        backdrop-filter: blur( 20px );
        -webkit-backdrop-filter: blur( 4px );
        border-radius: 10px;
        border: 2px solid rgba( 102, 252, 250, 0.25 );
        color:white;
        font-size: 2.5vw;
        text-shadow: 0px 0px 1px #000, 
                0px 0px 2px black;
    }


    #button{
        width: 40vw;
    }
}


@media only screen and (max-width: 600px){

    /* The upload starting div */
    .uploadd{
        flex-direction: column;
        justify-content: center;
    }

    /* tHE minions image */
    .image2{
        align-self: flex-end;
    }

    input{
        height:5vh;
    }

}

/* The heading for VIDEOS */
.second{

    margin-top: 7vh;
}

/* The dropdown icon */
.hand{
    width: 4vw;
    height: 2vh;
}

/* The entire video and dropdown holding div */
.videoo{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    gap:2rem;
    justify-content:center;
    align-items:center;
    background-color: rgba(31, 40, 51, 0.6);
    margin-top: 7vh;
}


/* The feedback at the bottom */
.top{
    align-self: center;
    color: #ffffff;
    background-color :#45a29e; 
    background-image : linear-gradient(315deg, #45a29e 44%,#1f2833 43%);
    padding-left: 5vw;
    padding-right: 5vw;
    padding-top: 1vh;
    padding-bottom:1vh;
    border-radius: 0.5vw;
    font-size: 2vh;
    border-top:2px solid #c5c6c7;
}

/* The anchor tag for feedback */
.top a{
    color:#66fcf1;
    text-shadow: 0px 0px 1px #000, 
                1px 0px 2px black;
    text-decoration: none;
    text-align: center;
    display: flex;
    justify-content: center;
}

/* THe input tag for the above mentioned */
input[type=text]{
        color:white;
    }

input[type=number]{
    color:white;
}

</style>
