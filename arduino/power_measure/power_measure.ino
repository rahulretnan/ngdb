

#include "ZMPT101B.h"
#include "ACS712.h"

ZMPT101B voltageSensor(A0);
ACS712 currentSensor(ACS712_30A, A1);

void setup()
{
  Serial.begin(9600);
  Serial.println("Calibrating... Ensure that no current flows through the sensor at this moment");
  delay(100);
  voltageSensor.calibrate();
  currentSensor.calibrate();
  Serial.println("Done!");
}

void loop()
{
  float U = voltageSensor.getVoltageAC();
  float I = currentSensor.getCurrentAC();
  float P = U * I;

  Serial.println(String("U = ") + U + " V");
  Serial.println(String("I = ") + I + " A");
  Serial.println(String("P = ") + P + " Watts");

  delay(1000);
}
