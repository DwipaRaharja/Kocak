import { Head } from "@inertiajs/react";

type RoomType = {
    id: number;
    name: string;
    description: string | null;
    capacity: number;
    base_price: string;
    is_active: boolean;
};

export default function RoomTypesIndex({
    roomTypes,
}: {
    roomTypes: RoomType[];
}) {
    return (
        <>
            <Head title="Room Types" />
            <main className="p-6">
                <h1 className="text-2xl font-semibold">Room Types</h1>

                <ul className="mt-4 space-y-3">
                    {roomTypes.map((roomType) => (
                        <li key={roomType.id} className="rounded border p-4">
                            <h2 className="font-medium text-xl">
                                {roomType.name}
                            </h2>
                            <p className="mt-2">Deskripsi: {roomType.description}</p>
                            <p className="mt-2">Kapasitas: {roomType.capacity}</p>
                            <p className="mt-2">
                                Status:{" "}
                                {roomType.is_active ? "Aktif" : "Tidak Aktif"}
                            </p>
                        </li>
                    ))}
                </ul>
            </main>
        </>
    );
}
