#!/bin/bash

DIRECTORIES="/Users/flohei/Development/OpenCV/att_faces/*"
LABEL=0

for d in $DIRECTORIES
do
	if [ -d "$d" ]; then 
		for f in "$d"/*
		do
			echo "$f;$LABEL"
		done
	fi
	LABEL=$((LABEL+1))
done
