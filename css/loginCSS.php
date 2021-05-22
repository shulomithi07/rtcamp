 <style> /

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    
}

.text{

    text-shadow: 0px 0px 1px #000, 
               0.5px 0px 1px black;

}

body{
        
    /* background-color: #55efc4; */
    
    background-image: linear-gradient(315deg,  #66fcf1 55%,   #1f2833 50%);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}


#image{
        width:30vw;
        height: 10vh;
}

@media only screen and (max-width: 600px) {
        body{
            background-image: linear-gradient(315deg,#66fcf1  55%,    #1f2833 50%);
        }
        .signup{
            position: relative;
            top:0%;
            margin:7vh auto;
            padding:10vh;
            background-color: black;
            background-image: linear-gradient(315deg, #1f2833 55%,   #66fcf1 50%);
            color:#fcfcfd;
            width: 60vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column-reverse;
            border-radius: 100% / 20%   ;
        }
    
    
        #image{
            width:50vw;
            height:50vh;
        }
    
        .left{
            width: 50vw;
    
        }
    
        .hide{
            display: block;
        }

        .show{
            display:none;
        }
    
        a{
            background-color: #1f2833;
            width: 15vw;
            text-decoration: none;
            color:#66fcf1;
            border:2px solid #66fcf1;
            padding: 4vw;
            border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
            font-size: 2vh;
        }
    
        a:hover{
            background-color:#66fcf1;
            color:black;
        }
    
    
        .right{

            width: 80vw;
            height: 50vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            gap: 1vh;
        }
    
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
    
        .center{
            display: flex;
            justify-content:center;
    
        }
    
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 45vw;
            height: 20vh;
            justify-content: center;
            gap: 1vh;
        }
    
        .first{
            justify-content: space-evenly;
        }
    
        input{
            width: 45vw;
            height:4vh;
            background-color: #000;
            outline: none;
            border-radius: 14px;
            color:#fcfcfd;
            font-size:1.7vh;
        }
    
        input:focus{
            background-color:#45a29e;
            color:#fff;
            
        }
    
        ::placeholder{
            color:#fcfcfd;
            font-size:1.7vh;
        }
    
        input[type=submit]{
            width:40vw;
            height: 5vh;
            text-align: center;
            color:white;
            background-image : linear-gradient(315deg,  #000 44%,  #0c7e78 13%);
            text-shadow: 0px 0px 1px #000, 
                         1px 1px 5px black;
            font-size: 2vh;
        }

        .bottom{
            align-self:center;
            width: 45vw;
        }
    
        
}



@media only screen and (max-width: 1200px) and (min-width: 600px)  {
        .example {background: green;}
        body{
            background-image: linear-gradient(315deg,#66fcf1  55%,    #1f2833 50%);
        }
        .signup{
            position: relative;
            top:5%;
            margin:7vh auto;
            padding:10vh;
            background-color: black;
            background-image: linear-gradient(315deg, #1f2833 55%,   #66fcf1 50%);
            color:#fcfcfd;
            width: 60vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column-reverse;
            border-radius: 100% / 20%   ;
        }
    
    
        #image{
            width:60vw;
            height:50vh;
        }
    
        .left{
            width: 50vw;
    
        }
    
        .hide{
            display: block;
        }

        .show{
                display: none;
        }
    
        a{
            background-color: #1f2833;
            width: 15vw;
            text-decoration: none;
            color:#66fcf1;
            border:2px solid #66fcf1;
            padding: 4vw;
            border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
            font-size: 2vh;
            outline:none;
        }
    
        a:hover{
            
            background-color:#66fcf1;
            color:black;
        }
    
    
        .right{
            width: 80vw;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 7vh;
        }
    
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
    
        .center{
            display: flex;
            justify-content:center;
    
        }
    
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 40vw;
            height: 20vh;
            justify-content: center;
            gap: 2vh;
        }
    
        .first{
            justify-content: space-evenly;
        }
    
        input{
            width: 45vw;
            height:4vh;
            background-color: #000;
            outline: none;
            border-radius: 14px;
            color:#fff;
        }
    
        input:focus{
            background-color:#45a29e;
            color:#fff;
            
        }
    
        ::placeholder{
            color:#fcfcfd;
            font-size:1.5vh;
        }
    
        input[type=submit]{
            width:30vw;
            height: 5vh;
            text-align: center;
            color:white;
            /* background-image : linear-gradient(315deg,  #1f2833 44%,  #0c7e78 13%); */
            background-image : linear-gradient(315deg, #45a29e 44%,#000 43%);
            font-size: 2vh;
            text-shadow: 0px 0px 1px #000, 
               1px 1px 5px black;

            
        }
    
      }
      
    





@media only screen and (min-width: 1201px) {

.signup{
        position: relative;
        top:20%;
        margin:-10vh auto;
        padding:10vh;
        background-color: black;
        background-image: linear-gradient(315deg,   #1f2833 55%,  #66fcf1 50%);
        color:#fcfcfd;
        width: 60vw;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 100% / 20%   ;
}
/* 
.left{}

#image{
        width:30vw;
        height: 40vh;
}
.right{}

.top{}

.center{} */

#image{
        width:30vw;
        height: 40vh;
    }

.left{
width: 30vw;
color:#1f2833;
font-size: 2vh;

}


a{
        background-color: #1f2833;
        width: 60px;
        text-decoration: none;
        color:#66fcf1;
        border:2px solid #66fcf1;
        padding: 1vw;
        border-radius: 81% 19% 28% 72% / 79% 67% 33% 21% ;
        font-size: 2vh;
}

a:hover{

/* background-color:#1f7973; */
background-color:#45a29e;
color:#070707;
border:2px solid #1f2833;
text-shadow: 0px 0px 1px #000, 
               0px 0px 0.5px black;
}


.right{
        width: 30vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        /* align-items: center; */
        flex-direction: column;
        gap: 2rem;
}



    /* .hide{
        display: none;
    } */

    .top{
        align-self: center;
        color: #ffffff;
        /* background-image: linear-gradient(190deg ,#45a29e,#000000, #3ce2d7); */
        background-image: linear-gradient(190deg ,#000000,#1f2833);
        padding: 0.5vw;
        border-radius: 0.3vw;
        border:2px solid #fcfcfd;
        font-size: 2vh;
        text-shadow: 0px 0px 1px #000, 
               3px 3px 5px black;
    }

    .center{
        align-self:center ;
        /* display: flex; */
        justify-self: center;
        /* padding-left: 15vw; */
        /* flex-direction: column; */
        

    }

    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 30vw;
        height: 20vh;
        justify-content: center;
        gap: 2vh;
    }

    .first{
        justify-content: center;
        justify-self: center;
    }

    input{
        width: 30vw;
        height:4vh;
        /* background-color: #1f2833; */
        /* background-image: linear-gradient(190deg ,#000000,#1f2833); */
        background-color: #000;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:2vh;
    }

    input:focus{
        background-color:#45a29e;
        color:#fff;
        
    }

    ::placeholder{
        color:#fcfcfd;
        font-size:2vh;
    }

    input[type=submit]{
        /* background-image: linear-gradient(190deg ,#45a29e,#3ce2d7,#56b8b8); */
        /* background-color: #1daa97; */
        width:7vw;
        height: 5vh;
        text-align: center;
        background-image: linear-gradient(190deg ,#000000,#1f2833);
        color:rgb(248, 248, 248);
        border:2px solid white;
        border-radius: 0.5vh;
        font-size: 2vh;
        
    }

    .bottom{
            align-self: center;
    }



}




/* background-color: #3c9994; */
        /* background-color: #1f2833;
        background-color :#55efc4;*/
        /* background-image : linear-gradient(315deg, #45a29e 64%,#1f2833 43%); */
        /* background-image: linear-gradient(to right, #000000, #231c22, #373545, #3e536b, #39748a, #39748a, #39748a, #39748a, #3e536b, #373545, #231c22, #000000); */
/* background-image: linear-gradient(190deg ,#45a29e,#3ce2d7,#56b8b8); */
        /* background-color: #1f2833; */
        /* background-image: linear-gradient(to right, #000000, #231c22, #373545, #3e536b, #39748a, #39748a, #39748a, #39748a, #3e536b, #373545, #231c22, #000000); */
        /* background-image: linear-gradient(190deg ,#45a29e,#000000, #3ce2d7); */
        /* background-color: #3c9994; */
        /* /* background-color: #1f2833; */
        /* text-shadow: 5px -2px 11px rgba(0,0,0, 1); */
        /* font-weight:bolder; */
        /* background-image: linear-gradient(315deg, #1f2833 50%,    #66fcf1 55%); */
        /* background-image: linear-gradient(190deg ,#45a29e,#3ce2d7,#56b8b8); */
        /* background-color: #1f2833; */
        /* background-image: linear-gradient(to right, #000000, #231c22, #373545, #3e536b, #39748a, #39748a, #39748a, #39748a, #3e536b, #373545, #231c22, #000000); */
        /* background-image: linear-gradient(190deg ,#45a29e,#000000, #3ce2d7); */
        /* background-color: #3c9994; */
        /* /* background-color: #1f2833; */
        
        /* text-shadow: 5px -2px 11px rgba(0,0,0, 1); */
        /* font-weight:bolder; */
        /* background-image: linear-gradient(315deg, #1f2833 50%,    #66fcf1 55%); */
        /* background: rgb(0,0,0); */
/* background: radial-gradient(circle, rgba(0,0,0,0.8214636196275386) 0%, rgba(42,167,165,1) 100%); #8a8a8a */

/* background-image: linear-gradient(315deg, #1f2833 55%,   #48e6b9 50%); */
/* </style> */