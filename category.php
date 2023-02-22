<?php


class Category{
    private $name;
    private $icon;

    public function __construct($name, $icon)
    {
        $this->setName($name);
        $this->setIcon($icon);
    }
    
    
    public function getName()
    {
        return $this->name;
    }




    @return self

    public function setName($name)
    {
        $this->name =$name;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    @return self

    public function setIcon($icon)
    {
        $this-> = $icon;

        retun $this;
    }
}
