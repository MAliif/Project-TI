<?php

namespace App\Models;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function canBeBorrowed(): bool {
        return $this->activeLoans() < $this->copies_in_circulation;
    }


    private function activeLoans(): int {
        return $this->loans()
            ->where('is_returned', false)
            ->get()
            ->sum('number_borrowed');
    }


    public function loans(): HasMany {
        return $this->hasMany(Loan::class);
    }


    public function availableCopies(): int {
        return $this->copies_in_circulation - $this->activeLoans();
    }
}
