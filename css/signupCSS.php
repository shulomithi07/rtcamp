<style> 

/* Making everything 0 before starting */
*{
    margin:0;
    padding:0;
}

/* The image and its alignment */
body{
    
    background-color: #55efc4;
    background-image: url("images/feedback1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}


  
  
  
  /* Small devices (mobiles) */
  

  @media only screen and (max-width: 600px) {
      
    /* THe main container */
    .signup{
        position: relative;
        top:50%;
        margin:7vh auto;
        padding:10vh;
        background-image: linear-gradient(315deg,   rgba(31, 40, 51, 0.85) 55%,  rgba( 102, 252, 241, 0.85 )  50%);
        color:#fcfcfd;
        width: 60vw;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column-reverse;
        border-radius: 100% / 20%   ;
    }

    /* THe image div */
    #image{
        width:50vw;
        height:50vh;
    }

    /* THE image and the login link holding div */
    .left{
        width: 50vw;

    }

    /* Break tag for responsive alignment */
    .hide{
        display: block;
    }

    /* The anchor tag and its design */
    a{
        background-color: #000;
        width: 15vw;
        text-decoration: none;
        color:#66fcf1;
        border:2px solid #66fcf1;
        padding: 4vw;
        border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
        font-size: 2vh;
    }

    /* Anchor tag on hover */
    a:hover{
        background-color:#000;
        border-radius: 28% 72% 81% 19%  / 67% 59% 41% 33%;
        color:white;

    }

    /* The form tag div */
    .right{
        width: 80vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 7vh;
    }

    /* The session message and the why late fill details messages */
    .top{
        align-self: center;
        color: #ffffff;
        background-color :#45a29e; 
        background-image : linear-gradient(315deg, #45a29e 44%,#111 43%);
        padding-left: 5vw;
        padding-right: 5vw;
        padding-top: 1vh;
        padding-bottom:1vh;
        border-radius: 0.5vw;
        font-size: 2vh;
        border-top:2px solid #c5c6c7;
    }

    /* THe form div */
    .center{
        display: flex;

    }

    /* THe form tag and its alignments */
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 40vw;
        height: 20vh;
        justify-content: center;
        gap: 2vh;
    }

    /* THe divs for 2 input tags */
    .first{
        justify-content: space-evenly;
    }

    /* THe input tag and its design */
    input{
        width: 45vw;
        height:4vh;
        background-color: #000;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:2vh;
    }

    /* Input tag on focus */
    input:focus{
        background-color:#45a29e;
        
    }

    /* THe placeholder color */
    ::placeholder{
        color:#fcfcfd;
        font-size:2vh;
    }

    /* THe submit button */
    input[type=submit]{
            width:40vw;
            height: 5vh;
            text-align: center;
            color:white;
            background-image : linear-gradient(315deg,  #111 44%,  #0c7e78 13%);
            font-size: 2vh;
    }
    

    
  }


/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 1200px) and (min-width: 600px)  {
    
    /* The main div */
    .signup{
        position: relative;
        top:50%;
        margin:7vh auto;
        padding:10vh;
        background-image: linear-gradient(315deg, rgba(31, 40, 51,0.5) 55%,  rgba( 102, 252, 241, 0.75 )  50%);
        color:#fcfcfd;
        width: 60vw;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column-reverse;
        border-radius: 100% / 20%   ;
    }

    /* The image div */
    #image{
        width:50vw;
        height:50vh;
    }

    /* The image and the login link */
    .left{
        width: 50vw;

    }

    /* THe break tag for responsive help */
    .hide{
        display: block;
    }

    /* The anchor tag */
    a{
        background-color: #111;
        width: 15vw;
        text-decoration: none;
        color:#66fcf1;
        border:2px solid #66fcf1;
        padding: 1.5vw;
        border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
        font-size: 2vh;
    }

    /* The anchor tag on hover */
    a:hover{
        
        border-radius: 28% 72% 81% 19%  / 67% 59% 41% 33%;
        background-color:#111;
        color:white;
    }

    /* THe form tag holder */
    .right{
        width: 80vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 7vh;
    }

    /* The why so late and session message div */
    .top{
        align-self: center;
        color: #ffffff;
        background-color :#45a29e; 
        background-image : linear-gradient(315deg, #45a29e 44%,#000 43%);
        padding-left: 5vw;
        padding-right: 5vw;
        padding-top: 1vh;
        padding-bottom:1vh;
        border-radius: 0.5vw;
        font-size: 2vh;
        border-top:2px solid #c5c6c7;
    }

    /* The form tag holder */
    .center{
        display: flex;

    }

    /* Form tag */
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 40vw;
        height: 20vh;
        justify-content: center;
        gap: 2vh;
    }

    /* The 2 input fields holder */
    .first{
        justify-content: space-evenly;
    }

    /* THe input tag and its design */
    input{
        width: 35vw;
        height:4vh;
        background-color: #000;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:2vh;
    }

    /* THe input on focus */
    input:focus{
        background-color:#45a29e;
        
    }

    /* The placeholder fot input tag to change its color */
    ::placeholder{
        color:#fcfcfd;
        font-size:2vh;
    }

    /* THe submit button */
    input[type=submit]{
        width:35vw;
        height: 5vh;
        text-align: center;
        color:white;
        background-image : linear-gradient(315deg,  #111 44%,  #0c7e78 13%);
        font-size: 2vh;
        display:flex;
        justify-content:center;
        align-self:center;
        
    }

    /* The submit button in hover */
    input[type=submit]:hover{
        background-image: linear-gradient(190deg ,rgba( 69, 162, 158, 0.35 ),rgba( 60, 226, 215, 0.35 ),rgba( 86, 184, 184, 0.35 ));
        color:white;
        text-shadow: 0px 0px 1px #fff, 
                        1spx 0px 5px #fff;
        
    }

  }
  

  /* The viewport for devices like smaller laptops and tablets */
  @media only screen and (min-width: 1201px) {

    /* The main div holding image and the form */
    .signup{
        position: relative;
        top:50%;
        margin:7vh auto;
        padding:10vh;
        background-image: linear-gradient(315deg, rgba(31, 40, 51, 0.85) 55%,  rgba( 102, 252, 241, 0.65 )  50%);
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        color:#fcfcfd;
        width: 60vw;
        height:70vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 100% / 20%   ;
    }


    /* THe image div */
    #image{
        width:25vw;
        height: 300px;
    }

    /* The image and the login link div */
    .left{
        width: 30vw;

    }

    /* The login link */
    a{
        /* background-color: #1f2833; */
        background-color:#000;
        width: 60px;
        text-decoration: none;
        color:#66fcf1;
        border:2px solid #66fcf1;
        padding: 1vw;
        border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
        font-size: 2vh;
    }

    /* The login link on hover */
    a:hover{
        
        background-color:black;
        border-radius: 28% 72% 81% 19%  / 67% 59% 41% 33%;
        color:white;
    }


    /* THe form tag holder */
    .right{
        width: 30vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 2rem;
    }
    
    /* THe break tag used in smaller devices */
    .hide{
        display: none;
    }

    /* The why so late fill details and the session message div */
    .top{
        align-self: center;
        color: #ffffff;
        background: rgba( 91, 255, 250, 0.55 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 8.0px );
        -webkit-backdrop-filter: blur( 8.0px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        padding: 0.5vw;
        border-radius: 0.3vw;
        font-size: 2vh;
    }

    /* The form tag holder */
    .center{
        display: flex;
        justify-content:center;

    }

    /* The form tag and its alignment */
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 30vw;
        height: 20vh;
        justify-content: center;
        gap: 2vh;
    }

    /* The 2 input tags holder */
    .first{
        justify-content: space-evenly;
    }

    /* The input tag */
    input{
        width: 14vw;
        height:4vh;
        background-color: #111;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:1.8vh;
    }

    /* The input tags on focus */
    input:focus{
        background-color:#45a29e;
        
    }

    /* The placeholder for input tags */
    ::placeholder{
        color:#fcfcfd;
        font-size:1.8vh;
    }

    /* The submit button */
    input[type=submit]{
        background: rgba( 91, 255, 250, 0.50 );
        border: 1px solid rgba( 255, 255, 255, 0.18 );
        width:7vw;
        height: 5vh;
        text-align: center;
        color:white;
        font-size: 2vh;
        
    }

    /* Submit button on hover */
    input[type=submit]:hover{
        background-image: linear-gradient(190deg ,rgba( 69, 162, 158, 0.35 ),rgba( 60, 226, 215, 0.35 ),rgba( 86, 184, 184, 0.35 ));
    }

  }

</style>



   