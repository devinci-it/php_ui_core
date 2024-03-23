#!/bin/bash

# Define variables
LIBRARY_NAME="devinci-uicore"
VERSION=$(git describe --tags --abbrev=0)  # Get the latest Git tag as the version
DIST_FOLDER="dist"  # Use dirname to get the parent directory

# Create a directory for the distribution files if it doesn't exist
mkdir -p $DIST_FOLDER

# Generate the .tar file
tar -cvf $DIST_FOLDER/$LIBRARY_NAME-$VERSION.tar .

# Notify the user
echo "Generated $DIST_FOLDER/$LIBRARY_NAME-$VERSION.tar successfully."
