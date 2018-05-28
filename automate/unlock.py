from socket import *
import select
import MySQLdb

bufferSize=1024
ch1ON=b'\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x01\x64\x00\x00\x48\xeb'
ch1OFF=b'\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x01\x00\x00\x00\x0f\x40'
ch2ON=b'\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x02\x64\x00\x00\xd3\x37'
ch2OFF=b'\xc0\xa8\x01\x0d\x53\x4d\x41\x52\x54\x43\x4c\x4f\x55\x44\xaa\xaa\x0f\xbb\xbb\xcc\xc1\x00\x31\x01\x15\x02\x00\x00\x00\x94\x9c'

def UNLOCK():
    s=socket(AF_INET,SOCK_DGRAM)
    s.bind(('',6000))
    s.sendto(ch1ON, ('192.168.1.100', 6000))
    s.sendto(ch2OFF,('192.168.1.100',6000))
    s.close()
    return (getStatusCh1_32(), getStatusCh2_32())

def getStatusCh1_32 ():
    port = 6000  # where do you expect to get a msg?
    bufferSize = 1024  # whatever you need
    s = socket(AF_INET, SOCK_DGRAM)
    s.bind(('192.168.1.255', port))
    s.setblocking(0)
    i=0
    while True:
        i=i+1
        result = select.select([s], [], [])
        msg = result[0][0].recv(bufferSize)
        print (msg[18], msg[22], msg[25], msg[26])
        if (msg[18]==21):
            if (msg[22]==50):
                if (msg[25]==1):
                    if (msg[26]==248):
                    	conn = MySQLdb.connect("localhost","root","anni99K","silop")
                		c = conn.cursor()
                		c.execute("""UPDATE switches (status) VALUES (0);""")
                		conn.commit()
		                c.close()
                        return 'Success'
                    else:
                        return 'Fail'
        if (i>10):
            return 'Not Responding'

#ready
def getStatusCh2_32 ():
    port = 6000  # where do you expect to get a msg?
    bufferSize = 1024  # whatever you need
    s = socket(AF_INET, SOCK_DGRAM)
    s.bind(('192.168.1.255', port))
    s.setblocking(0)
    i=0
    while True:
        i=i+1
        result = select.select([s], [], [])
        msg = result[0][0].recv(bufferSize)
        print (msg[18], msg[22], msg[25], msg[26])
        if (msg[18]==21):
            if (msg[22]==50):
                if (msg[25]==2):
                    if (msg[26]==248):
                    	conn = MySQLdb.connect("localhost","root","anni99K","silop")
                		c = conn.cursor()
                		c.execute("""UPDATE doors (status) VALUES (1);""")
                		conn.commit()
		                c.close()
                        return 'Success'
                    else:
                        return 'Fail'
        if (i>10):
            return 'Not Responding'

def getDigitalSensorsStatus():
    s=socket(AF_INET, SOCK_DGRAM)
    s.bind(('', 6000))
    s.sendto(doorStat ,('192.168.1.100',6000))
    s.close()
    s2= socket(AF_INET, SOCK_DGRAM)
    s2.bind(('192.168.1.255',6000))
    s2.setblocking(0)
    i=0
    #construct
    while True:
        i=i+1
        result = select.select([s2], [], [])
        msg = result[0][0].recv(bufferSize)

        if (msg[18]==20):
            print(msg[18], msg[21], msg[22], msg[26])
            if (msg[21]==219 and msg[22]==1):
                d1=msg[25]
                d2=msg[26]
                lux=msg[27]
                motion=msg[28]
                conn = MySQLdb.connect("localhost","root","anni99K","silop")
                c = conn.cursor()
                c.execute("""UPDATE sensors (status) VALUES (%d);""",d1)
                conn.commit()
		        c.close()
                #return (d1,d2,lux,motion)
        if (i>10):
            return 'door sensor not responding'

UNLOCK();
getDigitalSensorsStatus();