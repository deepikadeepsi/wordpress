# Use the official WordPress image as a parent image
FROM wordpress:latest

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html/
COPY . /var/www/html/

# Install any needed packages specified in requirements.txt
# RUN apt-get update && apt-get install -y package-bar package-baz

# Make port 80 available to the world outside this container
EXPOSE 80

# Define environment variable
ENV NAME World

# Run app.py when the container launches
# CMD ["php", "some-wordpress-script.php"]

