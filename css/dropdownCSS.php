<style>

/* THe div of video tag for my convenience */
.videoo{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    gap:2rem;
    justify-content:center;
    align-items:center;
}

/* Second div for video to give id I used it */
.row{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    
}

/* The hand symbol div */
.dropbtn {
  background-color: transparent;
  color: white;
  font-size: 15px;
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
}

/* The video container  */
.video-container {
  position: relative;
  display: inline-block;
}

/* div holding hand symbol and the content */
.dropdown{
    position:relative;
    display:inline-block;
}

/* The anchor tags holding container */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 50px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
  z-index: 1;
  bottom:40%;
  left:0%;
}

/* The anchor tags in the container */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* The anchors tags on hover to add depth to visual pleasing */
.dropdown-content a:hover {background-color: #ddd;}

/* Display of the links on hover of the hand symbol */
.dropdown:hover .dropdown-content {display: block;}

/* Color of the dropbtn which means hand symbol */
.dropdown:hover .dropbtn {background-color: white; color:black;}


</style>