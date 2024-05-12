<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Empleado;

class EmpleadoController extends Controller
{

    public function register() {
        return view('auth/register');
    }

    public function registerSave(Request $request) {
        
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:empleados', 'regex:/^(.+)@(outlook\.com|gmail\.com|hotmail\.com|icloud\.com)$/i'], 
            'password' => ['required', 'string', 'min:2', 'confirmed']
        ])-> validate();

        Empleado::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => 'Admin'
        ]);
  
        return redirect()->route('login');

        
    }

    public function login() {
        
        return view ('auth/login');

    }

    public function loginAction(Request $request)
{
    Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ])->validate();

    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    $request->session()->regenerate();

    $empleado = Auth::user();  // Ahora devuelve una instancia de Empleado

    if ($empleado->cargo === 'admin' || $empleado->cargo === 'Admin') {
        return redirect()->route('empleados.index'); // Redirección para administradores
    } else {
        return redirect()->route('views.perfil', ['id' => $empleado->id]);  // Redirección para otros empleados
    }
}


    public function logout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        
        return redirect('/');
    }
    

    public function profile(Request $request) {
    
        return view('profile');
    }


    public function showProfile($id)
{
    $empleado = Empleado::findOrFail($id); // Busca el empleado por ID, lanza error 404 si no lo encuentra
    return view('perfil', ['empleado' => $empleado]); // Cambia 'profile' a 'perfil'
}

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::orderBy('created_at', 'DESC')->get(); // Fetch all employees from the database
        return view('empleados.index', compact('empleados')); // Pass employees to the view

  
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empleados = Empleado::all(); // Fetch all employees from the database
        return view('empleados.create'); // Pass employees to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $empleado = new Empleado();
    $empleado->name = $request->name;
    $empleado->lastname = $request->lastname;
    $empleado->cargo = $request->cargo; 
    $empleado->salario = $request->salario; 
    $empleado->email = $request->email; 
    $empleado->password = Hash::make($request->password); 
    $empleado->save();

    return redirect()->route('empleados.index')->with('success', 'Empleado creado con éxito');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleados = Empleado::findOrFail($id); // Fetch all employees from the database
        return view('empleados.show', compact('empleados')); // Pass employees to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleados = Empleado::findOrFail($id); // Fetch all employees from the database
        return view('empleados.edit', compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleados = Empleado::findOrFail($id);

        $empleados -> update($request->all());

        return redirect()->route('empleados')->with('success', 'Empleado actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleados = Empleado::findOrFail($id);

        $empleados -> delete();

        return redirect()->route('empleados')->with('success', 'Empleado eliminado con éxito');
    }
}
