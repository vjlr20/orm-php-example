<?php
    require_once './models/Autor.php';

    class AutorController
    {
        public function getAll()
        {
            $autores = Autor::get();

            return $autores;
        }

        public function getById(int $id)
        {
            $autores = Autor::where('id_autor', $id)->first();

            return $autores;
        }

        public function create(array $data)
        {
            try {
                $autor = Autor::insertGetId($data);

                return $this->getById($autor);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function update(int $id, array $data)
        {
            try {
                $autor = Autor::where('id_autor', $id)->update($data);

                return $this->getById($id);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function destroy(int $id)
        {
            try {
                $query = Autor::where('id_autor', $id);
                $autor = $query->first();

                if ($query->delete()) {
                    return $autor;
                } else {
                    return "Error";
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }
