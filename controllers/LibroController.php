<?php
    require_once './models/Libro.php';

    class LibroController
    {
        public function getAll()
        {
            $libros = Libro::get();
            
            return $libros;
        }

        public function getById(int $id)
        {
            $libro = Libro::where('id_libro', $id)->first();

            return $libro;
        }

        public function create(array $data)
        {
            try {
                $libro = Libro::insertGetId($data);

                return $this->getById($libro);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function update(int $id, array $data)
        {
            try {
                $libro = Libro::where('id_libro', $id)->update($data);

                return $this->getById($id);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function destroy(int $id)
        {
            try {
                $query = Libro::where('id_libro', $id);
                $libro = $query->first();

                if ($query->delete()) {
                    return $libro;
                } else {
                    return "Error";
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }
