<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateEmprestimoRequest;
use App\Http\Requests\UpdateEmprestimoRequest;
use App\Repositories\EmprestimoRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Emprestimo;
use App\Models\Livro;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Sentinel;

class EmprestimoController extends InfyOmBaseController
{
    /** @var  EmprestimoRepository */
    private $emprestimoRepository;

    public function __construct(EmprestimoRepository $emprestimoRepo)
    {
        $this->emprestimoRepository = $emprestimoRepo;
    }

    /**
     * Display a listing of the Emprestimo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->emprestimoRepository->pushCriteria(new RequestCriteria($request));
        $emprestimos = $this->emprestimoRepository->all();
        return view('admin.emprestimos.index')
            ->with('emprestimos', $emprestimos);
    }

    /**
     * Show the form for creating a new Emprestimo.
     *
     * @return Response
     */
    public function create()
    {
        $usuario = Sentinel::getUser();
        $livros = Livro::all();
      //  $livros->id = strval($livros->id);

        return view('admin.emprestimos.create', [
            'livros' => $livros,
            'usuario' => $usuario ]);
    }

    /**
     * Store a newly created Emprestimo in storage.
     *
     * @param CreateEmprestimoRequest $request
     *
     * @return Response
     */
    public function store(CreateEmprestimoRequest $request)
    {
        $input = $request->all();

        $emprestimo = $this->emprestimoRepository->create($input);

        Flash::success('Emprestimo saved successfully.');

        return redirect(route('admin.emprestimos.index'));
    }

    /**
     * Display the specified Emprestimo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $emprestimo = $this->emprestimoRepository->findWithoutFail($id);

        if (empty($emprestimo)) {
            Flash::error('Emprestimo not found');

            return redirect(route('emprestimos.index'));
        }

        return view('admin.emprestimos.show')->with('emprestimo', $emprestimo);
    }

    /**
     * Show the form for editing the specified Emprestimo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $emprestimo = $this->emprestimoRepository->findWithoutFail($id);

        if (empty($emprestimo)) {
            Flash::error('Emprestimo not found');

            return redirect(route('emprestimos.index'));
        }

        return view('admin.emprestimos.edit')->with('emprestimo', $emprestimo);
    }

    /**
     * Update the specified Emprestimo in storage.
     *
     * @param  int              $id
     * @param UpdateEmprestimoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmprestimoRequest $request)
    {
        $emprestimo = $this->emprestimoRepository->findWithoutFail($id);



        if (empty($emprestimo)) {
            Flash::error('Emprestimo not found');

            return redirect(route('emprestimos.index'));
        }

        $emprestimo = $this->emprestimoRepository->update($request->all(), $id);

        Flash::success('Emprestimo updated successfully.');

        return redirect(route('admin.emprestimos.index'));
    }

    /**
     * Remove the specified Emprestimo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.emprestimos.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Emprestimo::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.emprestimos.index'))->with('success', Lang::get('message.success.delete'));

       }

}
