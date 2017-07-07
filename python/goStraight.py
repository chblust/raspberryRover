import Adafruit_PCA9685

pwm = Adafruit_PCA9685.PCA9685()

straight = 478

pwm.set_pwm_freq(60)

pwm.set_pwm(0, 0, straight) 
