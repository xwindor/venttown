/*
 * Receive 4.1
 * receives signal from Transmitter 4.2 to either turn on the valve or turn off the valve.
 */

#include <VirtualWire.h>
#include <VirtualWire_Config.h>

char message[30];
const int receivePin = 10;
const int solenoidPin = 13;
const int waterSensorPin = 4;

void setup() {
  pinMode(solenoidPin, OUTPUT);
  
  vw_set_tx_pin(receivePin);

  vw_setup(2000);
  //turns on the device for receiving messages.
  vw_rx_start();
}

void loop() {
  // put your main code here, to run repeatedly:
  uint8_t buf[VW_MAX_MESSAGE_LEN];
  uint8_t bufflen = VW_MAX_MESSAGE_LEN;

  if (vw_get_message(buf, &bufflen)) {
    int i;

    Serial.print("Got: ");

    //TODO:
    //make a way to check the string to see if it equals 'ValveOpening' or 'ValveClosing', and then perform the respective function
    //XAVIER: I NEED YOU TO CHECK IF THIS WORKS, MSG ME NEXT TIME YOU'RE ON YOUR COMPUTER AND I'LL HELP YOU SET IT UP.
    for (i = 0; i < bufflen; i++) {
      Serial.print(buf[i]);
    }
    Serial.println();

    openValve();
  }
}

void openValve() {
  digitalWrite(solenoidPin, HIGH);
}

void closeValve() {
  digitalWrite(solenoidPin, LOW);
}


