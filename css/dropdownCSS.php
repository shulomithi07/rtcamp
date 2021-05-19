<style>

.videoo{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    gap:2rem;
    justify-content:center;
    align-items:center;
}


.row{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    
}

.dropbtn {
  background-color: transparent;
  color: white;
  font-size: 15px;
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
}

.video-container {
  position: relative;
  display: inline-block;
}

.dropdown{
    position:relative;
    display:inline-block;
}

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

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white; color:black;}


</style>