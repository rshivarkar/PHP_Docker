
# Read ME
1) Build Image
docker build -t phpd .
2) Build Container.
docker run -d -p 8080:8080 -v C:/code/Rupesh_Test/PHP:/app/public --name my_project phpd

3) Folder path from your machin where we have PHP files (C:/code/Rupesh_Test/PHP)