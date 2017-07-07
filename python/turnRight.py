import Adafruit_PCA9685

pwm = Adafruit_PCA9685.PCA9685()

right = 565

pwm.set_pwm_freq(60)

pwm.set_pwm(0, 0, right) 
