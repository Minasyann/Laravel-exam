<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha',
            'birth_date' => 'date',
            'phone' => 'integer',
            'email' => 'required|email|unique:users',
            'avatar'=> 'file|mimes:jpg,jpeg,png',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Can not be empty",
            "name.alpha" => "Only string",
            "birth_date.date" => "Please choose date",
            "phone.integer" => "Only Numbers",
            "email.required" => "This is required․",
            "email.email" => "Invalid email",
            "email.unique" => "Profile exists․",
            "avatar.file" => "Please choose file",
            "avatar.mimes" => "File must be jpg,jpeg or png",
            "password.required" => "This is required․",
        ];
    }
}

//Անուն ազգանուն- պետք է լինի պարտադիր լրացված և միայն տառեր
//Ծննդյան ամսաթիվ- ոչ պարտադիր դաշտ, պարտադիր ամսաթիվ,
//Հեռախոսահամար - ոչ պարտադիր շատ
//Էլ. հասցե - պետք է լինի պարտադիր, ունիկալ և վավեր էլ. հասցե
//Ծածկագիր - պարտադիր պետք է լինի,
//Ավատար - պարտադիր չէ, եթե օգտվողը չի ընտրում նկար դնել լռելայն ինչ-որ նկար, պետք է լինի պարտադիր ֆայլ, ֆորմատը` jpg, jpeg, png
