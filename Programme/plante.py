#need to install sudo apt-get install git-core build-essential python-dev libi2c-dev i2c-tools libffi-dev
#need to install https://github.com/adafruit/Adafruit_Python_DHT.git
#need to install pip3 install smbus
#need to install pip3 install cffi
import smbus
import time
import mysql.connector
import sys
import Adafruit_DHT

#DB settings
mydb = mysql.connector.connect(
	host="localhost",
	user="root",
	passwd="jesus",
	database="plante"
)

except mysql.connector.Error as err:
    mydb.close()
    os.system("python3 plante.py")
    time.sleep(0.2)
    quit()

mycursor = mydb.cursor()
while True:
    try:
        time.sleep(20)
    	#humidity and temperature 
        humydite, temperature = Adafruit_DHT.read_retry(11, 4)
            
        #Luminosity
        bus = smbus.SMBus(1)
        bus.write_byte_data(0x39, 0x00 | 0x80, 0x03)
        bus.write_byte_data(0x39, 0x01 | 0x80, 0x02)
        time.sleep(0.5)
        data = bus.read_i2c_block_data(0x39, 0x0C | 0x80, 2)
        data1 = bus.read_i2c_block_data(0x39, 0x0E | 0x80, 2)
        ch0 = data[1] * 256 + data[0]
        ch1 = data1[1] * 256 + data1[0]
        luminosite = ch0 - ch1

        #Insertion into the DB
        sql = "INSERT INTO plante (temperature, humydite, luminosite) VALUES (%s, %s, %s)"
        val = (temperature, humydite, luminosite)
        mycursor.execute(sql, val)
        mydb.commit()
    except Error as error:
        os.system("python3 plante.py")
        time.sleep(0.2)
        quit()

