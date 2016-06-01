#include <VirtualWire.h>

char message[30];

void setup() {
  vw_setup(2000);
  
  //Not sure which pin you are going to use for the transmitter Xavier, the sample code says 12 is the default
  vw_set_tx_pin(12);
}

void loop() {
  // put your main code here, to run repeatedly:

}
