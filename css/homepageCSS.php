<style>

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    
}


body{
    
    background-image: url(images/background4.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

    color:antiquewhite;
}


nav{
    position:sticky;
    top:0;
    display: flex;
    justify-content: space-around;
    flex-direction: row;
    padding:2vh;
}

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
}


.navv{
    display: none;
}

.openbtn{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
}

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

.greeting h3{
    align-self:center;
}



@media only screen and (min-width: 1201px) {

    .openbtn{
        display:none;
    }

    .intro{
        background-color: rgba(31, 40, 51, 0.6);
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

    .image{
        width: 50vw;
        }
    
}

@media only screen and (max-width: 1200px) and (min-width: 701px)  {
    

    nav{
        display: none;
    }

    .navv{
        display: block;
    }

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
      
      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      
      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }
      
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }
    

    .intro{
        background-color: rgba(31, 40, 51, 0.6);
        border: #45a29e;
        color:#66fcf1;
        width:100vw;
        height: 50vh;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        /* flex-direction: column;x */
        font-size: 3vw;
        padding: 2vw;
        padding-bottom: 7vh;
        text-transform: uppercase;
        margin-bottom: 10vh;

    }

    .image{
    width: 50vw;
    }

}


@media only screen and (max-width: 700px) {


    nav{
        display: none;
    }

    .navv{
        display: block;
    }

    .openbtn{
        position:sticky;
    }

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
      
      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      
      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }
      
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }
      
      

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

    .greeting h3{
        align-self:center;
    }


    .image{
        width: 70vw;
        /* height:100vh; */
    }
    
}

@media only screen and (min-width: 1201px) {


    .heading{
        text-align: center;
        margin-bottom: 2vh;
    }
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

    .image2{
        width: 40vw;
        height: 40vh;
    }

    .file1{
        width: 50vw;
        background-color:rgba(0, 0, 25, 0.5);
        padding: 2vh;
        font-size: 2vh;
        font-family: cursive;
    }
    
    input[type=text]{
        color:white;
    }

    .btn{

        width:10vw;
        height: 5vh;
        border-radius: 2vh;
        background: rgb(63,250,251);
        background: radial-gradient(circle, rgba(63,250,251,1) 0%, rgba(69,162,158,1) 100%);
        font-size: 1vw;
        text-shadow: 0px 0px 1px #000, 
                0px 0px 2px black;
    }

}  



@media only screen and (max-width: 1200px) and (min-width: 701px)  {

    .heading{
        text-align: center;
        margin-bottom: 2vh;
    }
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

    .image2{
        width: 40vw;
        height: 40vh;
    }

    .file1{
        width: 50vw;
        background-color:rgba(0, 0, 25, 0.5);
        padding: 2vh;
        font-size: 2vh;
        font-family: cursive;
    }

    input[type=text]{
        color:white;
    }

    .btn{

        width:20vw;
        height: 5vh;
        border-radius: 2vh;
        background: rgb(63,250,251);
        background: radial-gradient(circle, rgba(63,250,251,1) 0%, rgba(69,162,158,1) 100%);
        font-size: 2.5vw;
        text-shadow: 0px 0px 1px #000, 
                0px 0px 2px black;
    }

}


@media only screen and (max-width: 700px) {
    .heading{
        text-align: center;
        margin-bottom: 2vh;
    }
    .uploadd{
        width: 100vw;
        height: 40vh;
        background-color: rgba(31, 40, 51, 0.6);
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row;
        padding: 4vw;
    }

    .image2{
        width: 40vw;
        height: 20vh;
    }

    .file1{
        width: 50vw;
        background-color:rgba(0, 0, 25, 0.5);
        padding: 2vh;
        font-size: 1.3vh;
        font-family: cursive;
    }

    .btn{

        width:100vw;
        height: 3vh;
        border-radius: 2vh;
        background: rgb(63,250,251);
        background: radial-gradient(circle, rgba(63,250,251,1) 0%, rgba(69,162,158,1) 100%);
        font-size: 2.5vw;
        text-shadow: 0px 0px 1px #000, 
                0px 0px 2px black;
    }


    #button{
        width: 40vw;
    }
}


@media only screen and (max-width: 600px){

    .uploadd{
        flex-direction: column;
        justify-content: center;
    }

    .image2{
        align-self: flex-end;
    }
}

.second{

    margin-top: 7vh;
}

.hand{
    width: 4vw;
    height: 2vh;
}


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

.top a{
    color:#66fcf1;
    text-shadow: 0px 0px 1px #000, 
                1px 0px 2px black;
    text-decoration: none;
    text-align: center;
    display: flex;
    justify-content: center;
}
</style>
