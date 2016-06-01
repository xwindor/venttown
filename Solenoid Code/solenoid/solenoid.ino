//this is assuming you are connecting your solenoid to pin #4
int solenoidPin = 4;

//denoting if the valve is opened or closed.
unsigned char valveOn = 0;


void setup() {
  // put your setup code here, to run once:
  pinMode(solenoidPin, OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:

}

/*
 * open the valve
 */
void openValve() {
  digitalWrite(solenoidPin, HIGH);
}

/*
 * turn pin on for X amount of time, then turn off
 */
void openValveTimed(/* NOT SURE WHICH DATA TYPE TO USE FOR TIME YET, ELI DO YOU KNOW? */) {
  digitalWrite(solenoidPin, HIGH);
  //delay(HOWEVER LONG)
  closeValve();
}

/*
 * turn valve off
 */
void closeValve() {
  digitalWrite(solenoidPin, LOW);
}

