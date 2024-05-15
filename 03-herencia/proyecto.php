<?php
class Proyecto
{
    public float $presupuesto = 0;
    public Persona $persona;

    public function __construct(float $presupuesto, Persona $persona)
    {
        if ($persona instanceof Informatico) {
            //verifica si es del tipo Informatico
        }
        $this->presupuesto = $presupuesto;
        $this->persona = $persona;
    }

    public function mostrarDatos()
    {
        return "Presupuesto: " . $this->presupuesto
            . "<br> Personal: " . $this->persona->getNombre();
    }
}
