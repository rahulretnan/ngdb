#include "ZMPT101B.h"
#include "ACS712.h"

ZMPT101B voltageSensor(A0);
ACS712 currentSensor(ACS712_30A, A1);

void setup()
{
  Serial.begin(9600);
  voltageSensor.calibrate();
  currentSensor.calibrate();
}

void loop()
{
  float U = voltageSensor.getVoltageAC();
  float I = currentSensor.getCurrentAC();
  float P = U * I;

  Serial.println(String("U = ") + U + " V");
  Serial.println(String("I = ") + I + " A");
  delay(1000);
}
