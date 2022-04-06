//This block resets the equalizer when a new song comes on
// Resets the equilizer
function reset(){
    mediaElement = document.getElementById('leftdisc');
    document.getElementById('hi').value=50;
    document.getElementById('mid').value=50;
    document.getElementById('lo').value=50;
    sourceNode = context.createMediaElementSource(mediaElement);
    
    lofilter = context.createBiquadFilter();
    midfilter = context.createBiquadFilter();
    hifilter = context.createBiquadFilter();
    
    // Low-pass filter. See BiquadFilterNode docs http://www.html5rocks.com/en/tutorials/webaudio/intro/
    lofilter.type = 3; 
    // high-pass filter. See BiquadFilterNode docs http://www.html5rocks.com/en/tutorials/webaudio/intro/
    midfilter.type = 4; 
    hifilter.type = 4; 
    
    
    lofilter.frequency.value = 800; // Set cutoff to 440 HZ
    midfilter.frequency.value = 3000; // Set cutoff to 440 HZ
    hifilter.frequency.value = 5000; // Set cutoff to 440 HZ
    
    sourceNode.connect(lofilter);
    sourceNode.connect(midfilter);
    sourceNode.connect(hifilter);
    
    lofilter.connect(context.destination);
    midfilter.connect(context.destination);
    hifilter.connect(context.destination);
    leftdisc.volume=1-document.getElementById('xfade').value/100; 
    };
    
    //when changing the equalizer
    
    function eq(str){
      console.log(str);
      //since range is defaulted at 50 we need to default at 0
      strval = (document.getElementById(str).value-50)*0.8; // Set hi mid low db from -40 to 40
    
    
    switch(str) {
    case "lo":
    // disconnect the filter
    var lofilter
    lofilter.disconnect(0);
    // create new filter
    lofilter = context.createBiquadFilter();
    // create the audio graph connect filter to source
    sourceNode.connect(lofilter);
    // connect destination to filter
    lofilter.connect(context.destination);
    
    // specify parameters
    lofilter.type = 3; // Low-shelf filter. See BiquadFilterNode docs
    console.log(strval);
    lofilter.gain.value = strval;
    lofilter.frequency.value = 800;
    
    
    console.log(lofilter);
    
        break;
    
    case "mid":  
    var midfilter  
    midfilter.disconnect(0);
    midfilter = context.createBiquadFilter();
    midfilter.type = 4; // high-shelf filter. See BiquadFilterNode docs
    midfilter.gain.value = strval;
    midfilter.frequency.value = 3000;
    sourceNode.connect(midfilter);
    midfilter.connect(context.destination);
        break;
    
    case "hi":
    var hifilter

    hifilter.disconnect(0);
    hifilter = context.createBiquadFilter();
    hifilter.type = 4; // high-shelf filter. See BiquadFilterNode docs
    hifilter.gain.value = strval;
    hifilter.frequency.value = 5000;
    sourceNode.connect(hifilter);
    hifilter.connect(context.destination);
        break;
    
    default:
        console.log('default');
    }
    
    
    }