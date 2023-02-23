<?php

namespace app\models;

use app\core\dbModel;

class Vehicle extends dbModel
{
    protected string $veh_Id;
    protected string $plate_No;
    protected string $veh_brand;
    protected string $veh_model;
    protected string $veh_type;
    protected string $veh_location;
    protected string $price;

    protected string $availability;
    protected string $vo_Id;
    protected ?string $front_view;
    protected ?string $back_view;
    protected ?string $side_view;

    public function rules(): array
    {
        return [];
    }

    public static function tableName(): string
    {
        return 'vehicle';
    }

    public function attributes(): array
    {
       return ['veh_Id','plate_No','veh_brand','veh_model','veh_type','veh_location','price','availability','vo_Id','front_view','back_view','side_view'];
    }

    public static function primaryKey(): string
    {
        return 'veh_Id';
    }

    /**
     * @return string
     */
    public function getVehId(): string
    {
        return $this->veh_Id;
    }

    /**
     * @param string $veh_Id
     */
    public function setVehId(string $veh_Id): void
    {
        $this->veh_Id = $veh_Id;
    }

    /**
     * @return string
     */
    public function getPlateNo(): string
    {
        return $this->plate_No;
    }

    /**
     * @param string $plate_No
     */
    public function setPlateNo(string $plate_No): void
    {
        $this->plate_No = $plate_No;
    }

    /**
     * @return string
     */
    public function getVehBrand(): string
    {
        return $this->veh_brand;
    }

    /**
     * @param string $veh_brand
     */
    public function setVehBrand(string $veh_brand): void
    {
        $this->veh_brand = $veh_brand;
    }

    /**
     * @return string
     */
    public function getVehModel(): string
    {
        return $this->veh_model;
    }

    /**
     * @param string $veh_model
     */
    public function setVehModel(string $veh_model): void
    {
        $this->veh_model = $veh_model;
    }

    /**
     * @return string
     */
    public function getVehType(): string
    {
        return $this->veh_type;
    }

    /**
     * @param string $veh_type
     */
    public function setVehType(string $veh_type): void
    {
        $this->veh_type = $veh_type;
    }

    /**
     * @return string
     */
    public function getVehLocation(): string
    {
        return $this->veh_location;
    }

    /**
     * @param string $veh_location
     */
    public function setVehLocation(string $veh_location): void
    {
        $this->veh_location = $veh_location;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }

    /**
     * @param string $availability
     */
    public function setAvailability(string $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @return string
     */
    public function getVoId(): string
    {
        return $this->vo_Id;
    }

    /**
     * @param string $vo_Id
     */
    public function setVoId(string $vo_Id): void
    {
        $this->vo_Id = $vo_Id;
    }

    /**
     * @return string|null
     */
    public function getFrontView(): ?string
    {
        return $this->front_view;
    }

    /**
     * @param string|null $front_view
     */
    public function setFrontView(?string $front_view): void
    {
        $this->front_view = $front_view;
    }

    /**
     * @return string|null
     */
    public function getBackView(): ?string
    {
        return $this->back_view;
    }

    /**
     * @param string|null $back_view
     */
    public function setBackView(?string $back_view): void
    {
        $this->back_view = $back_view;
    }

    /**
     * @return string|null
     */
    public function getSideView(): ?string
    {
        return $this->side_view;
    }

    /**
     * @param string|null $side_view
     */
    public function setSideView(?string $side_view): void
    {
        $this->side_view = $side_view;
    }


}