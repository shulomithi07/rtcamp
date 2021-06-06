
<style>

/* The upload div */
.upload{

    display:flex;
    justify-content:flex-start;
    align-items:flex-start;
    flex-direction:column;
}

/* The value of progress bar which means the inside */
progress[value] {
    /* Reset the default appearance */
    -webkit-appearance: none;
    appearance: none;

    width: 250px;
    height: 3vh;
}

/* For different browser */
progress[value]::-webkit-progress-bar {
    background-color: #eee;
    border-radius: 2px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
}

/* For different browser */
progress[value]::-webkit-progress-value {
    background-image:
        -webkit-linear-gradient(-45deg, 
                                transparent 33%, rgba(0, 0, 0, .1) 33%, 
                                rgba(0,0, 0, .1) 66%, transparent 66%),
        -webkit-linear-gradient(top, 
                                rgba(255, 255, 255, .25), 
                                rgba(0, 0, 0, .25)),
        -webkit-linear-gradient(left, #09c, #f44);

        border-radius: 2px; 
        background-size: 35px 20px, 100% 100%, 100% 100%;
}

/* For the animated strips inbetween when loading */
@-webkit-keyframes animate-stripes {
    100% { background-position: -100px 0px; }
}

/* For the animated strips inbetween when loading */
@keyframes animate-stripes {
    100% { background-position: -100px 0px; }
}

/* Before the upload is started */
progress[value]::-webkit-progress-value::before {
    content: '0%';
    position: absolute;
    right: 0;
    top: -125%;
}

/* After the upload is started */
progress[value]::-webkit-progress-value::after {
    content: '';
    width: 6px;
    height: 6px;
    position: absolute;
    border-radius: 100%;
    right: 7px;
    top: 7px;
    background-color: white;
}

</style>