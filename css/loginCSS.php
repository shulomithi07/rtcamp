 <style> /

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    
}


body{
        
    background-image: linear-gradient(315deg,  #66fcf1 55%,   #1f2833 50%);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

/* background-image */
body{
    background-image:url("images/feedback1.jpg");
}


/* DONT HAVE AN ACCOUNT TEXT */
.text{

    text-shadow: 0px 0px 1px #000, 
           0.5px 0px 1px black;

}


@media only screen and (max-width: 600px) {
        
        /* The whole container */
        .signup{
            position: relative;
            top:0%;
            margin:7vh auto;
            padding:10vh;
            background-image: linear-gradient(315deg, rgba(102, 252, 241, 0.7) 55%, rgba(35, 40, 51, 0.5) 50%);
            color:#fcfcfd;
            width: 60vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column-reverse;
            border-radius: 100% / 20%   ;
        }
    
        /* text color based on media query */
        .text{
            color:black;
        }

        /* image */
        #image{
            width:50vw;
            height:50vh;
        }
    
        /* left of the container */
        .left{
            width: 50vw;
    
        }
    
        /* break tag used when required */
        .hide{
            display: block;
        }

        /* break tag used when required */
        .show{
            display:none;
        }
    
        /* anchor tag */
        a{
            background-color: #000;
            width: 15vw;
            text-decoration: none;
            color:#66fcf1;
            border:2px solid #66fcf1;
            padding: 4vw;
            border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
            font-size: 2vh;
            text-shadow: 0px 0px 1px #fff, 
                        0px 0px 0.5px #fff;
        }
    
        /* anchor tag on hover */
        a:hover{
            border-radius: 28% 72% 81% 19%  / 67% 59% 41% 33%;
            background-color:#000;
            color:white;
            border:2px solid #66fcf1;
            text-shadow: 0px 0px 1px #66fcf1, 
                        0px 0px 0.5px #66fcf1;
        }

        /* right block of the container  */
        .right{

            width: 80vw;
            height: 50vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            gap: 1vh;
        }
    
        /* The top text WHY LATE FILL THE DETAILS AND SESSION MESSAGE */
        .top{
            align-self: center;
            color: #ffffff;
            background-color :#45a29e; 
            background-image : linear-gradient(315deg, #45a29e 44%,#000 43%);
            padding-left: 5vw;
            padding-right: 5vw;
            padding-top: 1vh;
            padding-bottom:1vh;
            font-size: 2vh;
            border-top:2px solid #c5c6c7;
            text-shadow: 0px 0px 1px white, 
                         0.5px 0px 0.5px white;
            border-radius:2vw;
        }

    
        /* The form block */
        .center{
            display: flex;
            justify-content:center;
    
        }
    
        /* The form tag */
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 45vw;
            height: 20vh;
            justify-content: center;
            gap: 1vh;
        }
    
        /* Input fields */
        .first{
            justify-content: space-evenly;
        }

        /* The styling of input tag */
        input{
            width: 45vw;
            height:4vh;
            background-color: #000;
            outline: none;
            border-radius: 14px;
            color:#fcfcfd;
            font-size:1.7vh;
        }
    
        /* input on focus */
        input:focus{
            background-color:#45a29e;
            color:#fff;
            
        }
    
        /* input placeholder */
        ::placeholder{
            color:#fcfcfd;
            font-size:1.7vh;
        }
    
        /* The login button */
        input[type=submit]{
            width:40vw;
            height: 5vh;
            text-align: center;
            color:white;                    
            text-shadow: 0px 0px 1px white, 
                         0.5px 0px 0.5px white;
            font-size: 2vh;
        }

        /* The forgot password link */
        .forgot{
        border:none;
        background-color:transparent;
        color:black;
        text-shadow: 0px 0px 1px #000, 
                    0px 0px 2px #fff;
        width:30vw;
        padding:0;
        border-radius:2px;
        display:flex;
        align-self:flex-end;
        padding-right:2vw;
        }

        /* The forgot password link on hover */
        .forgot:hover{
            border:none;
            background-color:transparent;
            color:#fff;
            text-shadow: 2px 0px 3px #000, 
                    1px 0px 1px #000;
        }

        
}



@media only screen and (max-width: 900px) and (min-width: 600px)  {
        
    /* The main container */
    .signup{
        position: relative;
        top:5%;
        margin:7vh auto;
        padding:10vh;
        background-image: linear-gradient(315deg, rgba(31, 40, 51,0.5) 55%,   rgba(102, 252, 241,0.8) 50%);
        color:#fcfcfd;
        width: 60vw;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column-reverse;
        border-radius: 100% / 20%   ;
        gap:2rem;
    }

    /* The image tag size adjustment */
    #image{
        width:50vw;
        height:30vh;
    }

    /* The image block */
    .left{
        padding-top:4vh;
        width: 50vw;
        height:50vh;

    }

    /* The break tag used when required */
    .hide{
        display: block;
    }

    /* The break tag used when required */
    .show{
            display: none;
    }

    /* Anchor tag */
    a{
        background-color: #111;
        width: 15vw;
        text-decoration: none;
        color:#66fcf1;
        border:2px solid #66fcf1;
        padding: 2vw;
        border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
        font-size: 2vh;
        outline:none;
        text-shadow: 0px 0px 1px #fff, 
                    0px 0px 0.5px #fff;
    }

    /* Anchor tag on hover */
    a:hover{
        border-radius: 28% 72% 81% 19%  / 67% 59% 41% 33%;
        color:white;
        border:2px solid #66fcf1;
        text-shadow: 0px 0px 1px #66fcf1, 
                    0px 0px 0.5px #66fcf1;
        background-color:#000;
        color:white;
    }


    /* The form container */
    .right{
        width: 80vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 7vh;
    }

    /* Why late fill details text and session message text */
    .top{
        align-self: center;
        color: #ffffff;
        background-color :#45a29e; 
        background-image : linear-gradient(315deg, #45a29e 44%,#000 43%);
        padding-left: 5vw;
        padding-right: 5vw;
        padding-top: 1vh;
        padding-bottom:1vh;
        border-radius: 1vw;
        font-size: 2vh;
        border-top:2px solid #c5c6c7;
    }

    /* form holding div */
    .center{
        display: flex;
        justify-content:center;

    }

    /* The form */
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 40vw;
        height: 10vh;
        justify-content: center;
        gap: 2vh;
    }

    /* The input fields */
    .first{
        justify-content: space-evenly;
    }

    /* The input styling */
    input{
        width: 45vw;
        height:4vh;
        background-color: #000;
        outline: none;
        border-radius: 14px;
        color:#fff;
    }

    /* Input on focus */
    input:focus{
        background-color:#45a29e;
        color:#fff;
        
    }

    /* input tag placeholder */
    ::placeholder{
        color:#fcfcfd;
        font-size:1.5vh;
    }

    /* The login button */
    input[type=submit]{
        width:30vw;
        height: 5vh;
        text-align: center;
        color:white;
        background-image : linear-gradient(315deg, #45a29e 44%,#000 43%);
        font-size: 2vh;
        text-shadow: 0px 0px 1px #000, 
            1px 1px 5px black;

    }

    .btn{
        display:flex;
        justify-content:center;
    }
    /* The forgot password link */
    .forgot{
    border:none;
    background-color:transparent;
    border-radius:2px;
    width:20vw;
    height:4vh;
    padding:0;
    display:flex;
    justify-content:center;
    align-self:center;
    
    }

    /* The forgot password link on hover */
    .forgot:hover{
        border:none;
        background-color:transparent;
        color:white;
        text-shadow: 0px 0px 1px #66fcf1, 
                0px 0px 2px #66fcf1;
    }


}
      
    

@media only screen and (min-width: 901px) {


    /* The whole container */
    .signup{
        position: relative;
        top:20%;
        margin:-10vh auto;
        padding:10vh;
        background-image: linear-gradient(315deg,   rgba(31, 40, 51, 0.85) 55%,  rgba( 102, 252, 241, 0.85 )  50%);
        backdrop-filter: blur( 0.0px );
        -webkit-backdrop-filter: blur( 0.0px );
        border-radius: 10px;
        color:#fcfcfd;
        width: 60vw;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 100% / 20%   ;
    }

    /* The image styling */
    #image{
        width:30vw;
        height: 40vh;
        }

    /* The image holding container */
    .left{
        width: 30vw;
        color:#1f2833;
        font-size: 2vh;

    }

    /* The anchor tag */
    a{
        background-color: #1f2833;
        width: 60px;
        text-decoration: none;
        color:#52fff3;
        border:2px solid black;
        padding: 1vw;
        border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
        font-size: 2vh;
        text-shadow: 0px 0px 1px #fff, 
                        0px 0px 0.5px #fff;
    }

    /* The anchor tag on hover */
    a:hover{
        border-radius: 28% 72% 81% 19%  / 67% 59% 41% 33%;
        color:white;
        text-shadow: 0px 0px 1px #66fcf1, 
                    0px 0px 0.5px #66fcf1;
    }

    /* The form holiding div */
    .right{
        width: 30vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 2rem;
    }

    /* The text holding div Why late fill details and session message */
    .top{
        align-self: center;
        color: #ffffff;
        background-image: linear-gradient(190deg ,#000000,#1f2833);
        padding: 0.5vw;
        border-radius: 0.3vw;
        border:2px solid #fcfcfd;
        font-size: 2vh;
        text-shadow: 0px 0px 1px #000, 
            3px 3px 5px black;
    }

    /* The form holding div */
    .center{
        align-self:center ;
        justify-self: center;
        
    }

    /* The form */
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 30vw;
        height: 20vh;
        justify-content: center;
        gap: 2vh;
    }

    /* The input fields block */
    .first{
        justify-content: center;
        justify-self: center;
    }

    /* THe input field */
    input{
        width: 30vw;
        height:4vh;
        background-color: #000;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:2vh;
    }

    /* input on focus */
    input:focus{
        background-color:#45a29e;
        color:#fff;
        
    }

    /* Input placeholder */
    ::placeholder{
        color:#fcfcfd;
        font-size:2vh;
    }

    /* The login button */
    input[type=submit]{
        width:8vw;
        height: 5vh;
        text-align: center;
        background-image: linear-gradient(190deg ,#000000,#1f2833);
        color:rgb(248, 248, 248);
        border:2px solid white;
        border-radius: 0.5vh;
        font-size: 2vh;
        display:flex;
        align-self:center;
        padding-left:2vw;
        
    }

    /* The forgot password link */
    .forgot{
    border:none;
    background-color:transparent;
    border-radius:2px;
    width:15vw;
    height:4vh;
    padding:0;
    display:flex;
    justify-content:center;
    align-self:center;
    font-size:2.3vh;
    }

    /* The forgot password on hover */
    .forgot:hover{
        
        border:none;
        background-color:transparent;
        color:white;
        text-shadow: 0px 0px 1px #66fcf1, 
                0px 0px 2px #66fcf1;
    }

}

</style>