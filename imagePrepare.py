import os

for count,_ in enumerate(os.listdir("galleryImages")):
    src = "galleryImages/" + _
    dst = "galleryImages/" + str(count) + "_" + "some test text " + str(count) + "_" + "alt text for image " + str(count) + ".jpeg"
    

    os.rename(src,dst)
