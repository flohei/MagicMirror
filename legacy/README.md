# (Personalized) Magic Mirror

This project is based on Michael Teeuw's work on the [Magic Mirror][1]. My goal is to personalize his Rapsberry Pi powered mirror by adding a camera behind the one way mirror. Using [OpenCV][2] it should be fairly easy to detect and recognise the face face of the
mirror's user.

## Modules

### create_csv.sh

This script creates a CSV file for the face detection algorithms. As suggested in the [OpenCV documentation about Face Recognition][3] I'm using a format that takes all the photos and assigns them to a label for every person. Example:

	./flo/flo1.png;1
	./flo/flo2.png;1
	./drea/drea1.jpg;2
	
### Frontend

The frontend is the UI that's displayed on the mirror. This will be a rudimentary website with a dark background and light font as implemented by Michael.

### Backend

I figured it would be easiest to create a backend website which allows us to create users and upload images for each user. The face recognition algorithms needs a set of photographs to compare them to the camera output.

### Face Recognition

I implemented a demo project according to the tutorial on the OpenCV website which does already work quite pleasingly. At the moment, it does take some significant time to run on my MacBook Pro, though.

### Face Detection

Once the face detection works on static images we will need to run it on the video stream coming in from the RPi's camera. I assume that the RPi will not be fast enough to run the algorithm on that stream directly so we might need to take a still and work with that.  

To normalize the photo we need to find a face in there. That's where face detection comes in handy.

### Normalization

All the photographs we want to process need to be normalized, which means that they all need to have the same dimensions, the eyes need to be at the same height and they need to show the portion of the face.

## Current Status

* 2014-05-11: 8:06am — Compiling OpenCV done. That makes a total of 10 hours 15 minutes to compile.
* 2014-05-10: Raspberry Pi Camera was dead on arrival. :-( Got to get another one. Started compiling OpenCV on the Pi at 9:51pm.
* 2014-05-08: As of today I started implementing the different pieces of this work. The face recognition does work on my computer, `create_csv.sh` works as well. I also started implementing the backend. Yesterday I ordered the camera. I hope to try to compile OpenCV for the RPi over the weekend and get some first results by sunday.

## Todo

* Decide for a face recognition alogirthm (EigenFaces, FisherFaces or Local Binary Patterns Histograms)
* Create the frontend
* ~~Compile OpenCV for the Raspberry Pi~~
* ~~Install OpenCV on the Raspberry Pi~~
* Decide wether to use Python or C++ for face recognition part
* Connect the face recognition code to the web service part
* Settings
  * OpenWeatherMap API Key
  * Standort (für OWM)

## Contact

Florian Heiber  
<flo@flohei.de>  
[blog.flohei.de](http://blog.flohei.de)  
[@flohei](http://twitter.com/flohei)

[1]: http://s.flohei.de/2B
[2]: http://opencv.org
[3]: http://docs.opencv.org/trunk/modules/contrib/doc/facerec/facerec_tutorial.html#preparing-the-data