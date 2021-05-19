<style> 

*{
    margin:0;
    padding:0;
}

body{
    
    background-color: #55efc4;
    background-image: linear-gradient(315deg, #1f2833 55%,    #66fcf1 50%);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}




  
  /* Extra large devices (large laptops and desktops, 1200px and up) */
  

  @media only screen and (max-width: 600px) {
    body{
        background-image: linear-gradient(315deg,#66fcf1  55%,    #1f2833 50%);
    }
    .signup{
        position: relative;
        top:50%;
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
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 7vh;
    }

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

    .center{
        display: flex;

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
        width: 35vw;
        height:4vh;
        background-color: #1f2833;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:2vh;
    }

    input:focus{
        background-color:#45a29e;
        
    }

    ::placeholder{
        color:#fcfcfd;
        font-size:2vh;
    }

    input[type=submit]{
        width:40vw;
        height: 5vh;
        text-align: center;
        color:white;
        background-image : linear-gradient(315deg,  #1f2833 44%,  #0c7e78 13%);
        font-size: 2vh;
    }

    
  }


/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 1200px) and (min-width: 600px)  {
    .example {background: green;}
    body{
        background-image: linear-gradient(315deg,#66fcf1  55%,    #1f2833 50%);
    }
    .signup{
        position: relative;
        top:50%;
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
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 7vh;
    }

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

    .center{
        display: flex;

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
        width: 35vw;
        height:4vh;
        background-color: #1f2833;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:2vh;
    }

    input:focus{
        background-color:#45a29e;
        
    }

    ::placeholder{
        color:#fcfcfd;
        font-size:2vh;
    }

    input[type=submit]{
        width:40vw;
        height: 5vh;
        text-align: center;
        color:white;
        background-image : linear-gradient(315deg,  #1f2833 44%,  #0c7e78 13%);
        font-size: 2vh;
        
    }

  }
  


  @media only screen and (min-width: 1201px) {
    /* .example {background: pink;} */
  

    .signup{
        position: relative;
        top:50%;
        margin:7vh auto;
        padding:10vh;
        background-color: black;
        
        background-image: linear-gradient(315deg,  #66fcf1 55%,   #1f2833 50%);
        
        color:#fcfcfd;
        width: 60vw;
        height:70vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 100% / 20%   ;
    }


    #image{
        width:25vw;
        height: 300px;
    }

    .left{
        width: 30vw;

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
        
        background-color:#66fcf1;
        color:black;
    }


    .right{
        width: 30vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 2rem;
    }
    
    .hide{
        display: none;
    }

    .top{
        align-self: center;
        color: #ffffff;
        background-image: linear-gradient(190deg ,#45a29e,#000000, #3ce2d7);
        padding: 0.5vw;
        border-radius: 0.3vw;
        font-size: 2vh;
    }

    .center{
        display: flex;
        justify-content:center;

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
        justify-content: space-evenly;
    }

    input{
        width: 14vw;
        height:3vh;
        background-color: #1f2833;
        outline: none;
        border-radius: 14px;
        color:#fcfcfd;
        font-size:1.8vh;
    }

    input:focus{
        background-color:#45a29e;
        
    }

    ::placeholder{
        color:#fcfcfd;
        font-size:1.8vh;
    }

/* 
    input:focus::placeholder{
        /* color:#1f2833; 
        color:#fff;
        font-size:1.5vh;
        /* font-weight:2000; 
    } */

    input[type=submit]{
        /* background-image: linear-gradient(190deg ,#45a29e,#3ce2d7,#56b8b8); */
        background-color: #1f2833;
        width:7vw;
        height: 5vh;
        text-align: center;
        color:white;
        border:2px solid black;
        font-size: 2vh;
        
    }

  }

</style>



   