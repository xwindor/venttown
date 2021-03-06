/*
 * Transmitter 4.2
 * sends signal from UNO to NANO to activate the solenoid valve
 * 
 * 
 * for this I think we need some way of sending a flag to this transmitter in order to determine if we are sending the signal to
 * open the valve or close the valve. Eli if you have any ideas on how to do this let me know.
 */

#include <VirtualWire.h>
#include <VirtualWire_Config.h>

const int transmitPin = 11;
char openMessage[13] = "OpeningValve";
char closeMessage[13] = "ClosingValve";

void setup() {
  vw_setup(2000);
  
  //Not sure which pin you are going to use for the transmitter Xavier, the sample code says 12 is the default
  vw_set_tx_pin(transmitPin);
}

void loop() {
  // put your main code here, to run repeatedly:

  activate();
  //deactivate();
}

//sends the message to the receiver to activate the valve
void activate() {
  vw_send((uint8_t*) openMessage, strlen(openMessage));
  vw_wait_tx();
  delay(1000);
}

//sends the message to the receiver to activate the valve
void deactivate() {
  vw_send((uint8_t*) closeMessage, strlen(closeMessage));
  vw_wait_tx();
  delay(1000);
}

