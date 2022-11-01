
<?php

// ENUMS

 enum Status: string
{
    case PAID = 'pago';
    case PENDING = 'pendente';
    case CANCELED = 'cancelado';

    public function color(): string
    {
        return match($this){
            self::PAID => 'green',
            self::PENDING => 'yellow',
            self::CANCELED => 'red'
        };
    }
}

class CheckoutService
{
    public function handle(Status $gatewayStatus)
    {
        return $gatewayStatus->color();
    }
}

$service = new CheckoutService();

echo $service->handle(Status::PAID);
