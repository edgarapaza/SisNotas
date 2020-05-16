<?php

class Persona
{
  private $nombre;
  private $paterno;
  private $materno;
  private $sexo;
  private $dni;
  private $telefono;
  private $direccion;

  /**
   * Get the value of nombre
   */
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   *
   * @return  self
   */
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of paterno
   */
  public function getPaterno()
  {
    return $this->paterno;
  }

  /**
   * Set the value of paterno
   *
   * @return  self
   */
  public function setPaterno($paterno)
  {
    $this->paterno = $paterno;

    return $this;
  }

  /**
   * Get the value of materno
   */
  public function getMaterno()
  {
    return $this->materno;
  }

  /**
   * Set the value of materno
   *
   * @return  self
   */
  public function setMaterno($materno)
  {
    $this->materno = $materno;

    return $this;
  }

  /**
   * Get the value of sexo
   */
  public function getSexo()
  {
    return $this->sexo;
  }

  /**
   * Set the value of sexo
   *
   * @return  self
   */
  public function setSexo($sexo)
  {
    $this->sexo = $sexo;

    return $this;
  }

  /**
   * Get the value of dni
   */
  public function getDni()
  {
    return $this->dni;
  }

  /**
   * Set the value of dni
   *
   * @return  self
   */
  public function setDni($dni)
  {
    $this->dni = $dni;

    return $this;
  }

  /**
   * Get the value of telefono
   */
  public function getTelefono()
  {
    return $this->telefono;
  }

  /**
   * Set the value of telefono
   *
   * @return  self
   */
  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;

    return $this;
  }

  /**
   * Get the value of direccion
   */
  public function getDireccion()
  {
    return $this->direccion;
  }

  /**
   * Set the value of direccion
   *
   * @return  self
   */
  public function setDireccion($direccion)
  {
    $this->direccion = $direccion;

    return $this;
  }
}
