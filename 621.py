f = open("demo.txt", "rw+")
print("File Name:", f.name)

line = f.readline()
print("Reading Line: %s" % (line))

f.seek(0, 0)
line = f.readline()
print("Reading Line: %s" % (line))

f.close()
