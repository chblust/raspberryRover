import os
import Adafruit_BMP.BMP085 as BMP085

os.system("sudo rm info.txt")

os.system("sudo touch info.txt")
os.system("sudo chmod 777 info.txt")
chip = BMP085.BMP085()

temp = chip.read_temperature()
pressure = chip.read_pressure()
alt = chip.read_altitude()

file = open("/var/www/python/info.txt", "w")

file.write("Temperature (C): {0:0.2f} \n".format(temp))
file.write("Pressure (Pa): {0:0.2f} \n".format(pressure))
file.write("Altitude (m): {0:0.2f}".format(alt)) 

file.close()
